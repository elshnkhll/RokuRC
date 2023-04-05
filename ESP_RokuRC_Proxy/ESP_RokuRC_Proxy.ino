#include <WiFi.h>
#include <WebSocketsServer.h>  // Source https://github.com/luc-github/ESP3D/tree/2.1.x/libraries/arduinoWebSockets
#include <HTTPClient.h>

const char* ssid = "My_SSID";
const char* password = "MY_PSWRD";

WebSocketsServer webSocket = WebSocketsServer(81);

HTTPClient http;

boolean semafor = false;
String JSONtxt;
String JSON_TV_Info;
String serverName;

#include "functions.h"

void setup() {
  
  Serial.begin(115200);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) { Serial.print("."); delay(500); }
  Serial.println();
  String lcl_IP = WiFi.localIP().toString(); 
  String new_IP = lcl_IP.substring(0, lcl_IP.lastIndexOf(".") + 1);

  JSON_TV_Info = scan_Network(new_IP);

  delay(100);

  webSocket.begin();
  webSocket.onEvent(webSocketEvent);
  
  Serial.println( "\n Navigate to http://rokurc.com?MyESP32IP="+lcl_IP );

}

void loop() {
  
  webSocket.loop();

  if ( semafor ) {
    semafor = false;
    webSocket.broadcastTXT( JSONtxt );
  }

}
