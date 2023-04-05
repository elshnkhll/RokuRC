/*
  binary image rokurc_240x240px.bin was converted using
  https://lvgl.github.io/lv_img_conv/   
  CF_INDEXED_4_BIT format
*/


#include <Preferences.h>
#include <WiFi.h>
#include <WebServer.h>

#include "config.h"
#include "Wi_Fi.h"

TTGOClass *ttgo;
AXP20X_Class *power;
lv_obj_t *img = nullptr;
int16_t x, y;
bool touch_down = false;
bool irq = false;

// Roku ECP keyprass commands
String arr[5][3] = {
  {"VolumeMute",    "VolumeDown", "VolumeUP"},
  {"Back",          "Up",         "Home"    },
  {"Left",          "Select",     "Right"   },
  {"InstantReplay", "Down",       "Info"    },
  {"Rev",           "Play",       "Fwd"     },
};


void setup() {

  Serial.begin(115200);
  ttgo = TTGOClass::getWatch();
  ttgo->begin();
  ttgo->openBL();
  ttgo->bl->adjust(150);
  ttgo->motor_begin();
  ttgo->lvgl_begin();

  img   = lv_img_create(lv_scr_act(), NULL);
  lv_img_set_src(img, "P:/rokurc_240x240px.bin");
  lv_obj_align(img, NULL, LV_ALIGN_CENTER, 0, 0);
  vTaskDelay(100);

  // comment next line after first run
  Set_All_Prefs();
  
  Wi_Fi_Read_Config();
  Wi_Fi_Connect();
  vTaskDelay(100);

  pinMode(AXP202_INT, INPUT_PULLUP);   // TOUCH_INT
  attachInterrupt(AXP202_INT, [] {     //TOUCH_INT
    irq = true;
  }, FALLING);
  ttgo->power->enableIRQ(AXP202_PEK_SHORTPRESS_IRQ, true);
  ttgo->power->clearIRQ();

  lv_task_handler();  // display image
  vTaskDelay(100);

}

void loop() {

  if (irq) { //button pressed
    irq = false;
    ttgo->power->readIRQ();
    ttgo->power->clearIRQ();
    Serial.print( "Power" );
    send_to_Roku( "keypress", "Power" );
    ttgo->motor->onec(10);
    delay(10);
  }

  if (ttgo->getTouch(x, y)) { 
    if ( !touch_down ) {
      touch_down = true;
      Serial.print("[");
      delay(50);
    }
  } else {
    if ( touch_down ) {
      Serial.print( arr [map(y, 1, 240, 0, 5)][map(x, 1, 240, 0, 3)] );
      send_to_Roku( "keypress", arr [map(y, 1, 240, 0, 5)][map(x, 1, 240, 0, 3)] );
      ttgo->motor->onec(10);
      delay(10);
      Serial.println("]");
      touch_down = false;
    }
  }

  delay(50);
}


void send_to_Roku(String k, String v) {
  
  client.setNoDelay(1);

  if ( client.connect(server.c_str(), port.toInt()) ) {
    Serial.println("Connected to server.");
    client.println("POST /" + k + "/" + v + " HTTP/1.0");
    client.println();
  }

}
