WiFiClient client, client2;
Preferences prfrncs;

String hstnm    = "                    "; 
String ssid     = "                    "; 
String password = "                    "; 
String server   = "                    "; 
String mac     = "                  MAC";
String port    = "8060";

boolean Wi_Fi_Connect() {
  delay(1000);
  if ( WiFi.status() != WL_CONNECTED )  {
    WiFi.mode( WIFI_STA );
    WiFi.begin(ssid.c_str(), password.c_str());  
    WiFi.setHostname(hstnm.c_str());
  }
  Serial.print("Connecting to Wi-Fi .");
  int attempts = 0;
  while ( WiFi.status() != WL_CONNECTED )  {
    delay(500);
    Serial.print(".");
    if ( attempts++ > 25 ) {
      break;
    }
  }
  if ( WiFi.status() != WL_CONNECTED ) {
    Serial.println();
    Serial.println(F("Wi-Fi connect failed"));
    return false;
  }
  WiFi.setAutoConnect(true);
  WiFi.persistent(true);
  Serial.println();
  Serial.println("Wi-Fi connected");
  return true;
}

boolean Wi_Fi_Disonnect() {
  WiFi.disconnect();
  Serial.print("Disconnecting Wi-Fi .");
  int attempts = 0;
  while (WiFi.status() == WL_CONNECTED) {
    delay(500);
    Serial.print(".");
    if ( attempts++ > 25 ) {
      break;
    }
  }
  if ( WiFi.status() == WL_CONNECTED ) {
    Serial.println("Wi-Fi disconnect failed");
    return false;
  }
  Serial.println("");
  Serial.println("Wi-Fi disconnected");
  return true;
}

String Wi_Fi_MAC_Address() {
  byte mc[6];  // MAC address
  WiFi.macAddress(mc);
  return String(mc[0], HEX) + ":" + String(mc[1], HEX) + ":" + String(mc[2], HEX) + ":" + String(mc[3], HEX) + ":" + String(mc[4], HEX) + ":" + String(mc[5], HEX);
}

void Set_All_Prefs() {
  prfrncs.begin("wifi", false);
  prfrncs.clear();
  prfrncs.putString("hstnm",    "RokuRC");
  prfrncs.putString("ssid",     "MySSID");
  prfrncs.putString("password", "MyPASSWORD"); 
  prfrncs.putString("server",   "192.168.0.123");
  prfrncs.end();
}

bool Wi_Fi_Read_Config() {

  Serial.println("Reading config");
  prfrncs.begin("wifi", true);
  delay(10);

  hstnm    = prfrncs.getString("hstnm",    "none");
  ssid     = prfrncs.getString("ssid",     "none");
  password = prfrncs.getString("password", "none");
  server   = prfrncs.getString("server",   "none");

  delay(10);
  prfrncs.end();
  return true;
  
}
