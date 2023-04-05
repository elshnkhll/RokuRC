String xtrct_one_param( String xml, String needParam) {
  if ( xml.indexOf("<" + needParam + ">" ) > 0) {
    int needle_Len = needParam.length();
    int pos_Start = xml.indexOf("<" + needParam + ">");
    int pos_End = xml.indexOf("</" + needParam + ">");
    return xml.substring(pos_Start + needle_Len + 2, pos_End);
  }
}

String scan_Network( String new_IP) {
  Serial.println( "Sacnning..." );
  String data_JSON = "{";
  for ( int i = 2; i < 256; i++) { 
    Serial.print(i);
    Serial.print(" ");
    String serverPath = "http://" + new_IP + i + ":8060/query/device-info";
    http.begin(serverPath.c_str());
    http.setConnectTimeout( 350 );

    int httpResponseCode = http.GET();

    if (httpResponseCode > 0) {
      // Serial.print("HTTP Response code: "); Serial.println(httpResponseCode);
      String payload = http.getString();  // Serial.println(payload);

      data_JSON = data_JSON + "\"" + xtrct_one_param(payload, "device-id") + "\": {\"name\": "
                  + "\"" + xtrct_one_param(payload, "user-device-name") + "\", \"ip\": "
                  + "\"" + new_IP + i + "\", \"apps\": {";

      serverPath = "http://" + new_IP + i + ":8060/query/apps";
      http.begin(serverPath.c_str());
      http.setConnectTimeout( 500 );
      httpResponseCode = http.GET();
      if ( httpResponseCode > 0 ) {
        String apps_xml = http.getString();
        // Serial.println(apps_xml);
        int pos_Start = 0;
        int pos_End = 0;
        while (true) {
          pos_Start = apps_xml.indexOf("id=", pos_End + 2);
          if ( pos_Start < 0 ) break;
          pos_Start = pos_Start + 4;
          pos_End = apps_xml.indexOf("\" ", pos_Start);
          data_JSON = data_JSON + "\"" + apps_xml.substring(pos_Start, pos_End) + "\": ";  // app id
          pos_Start = apps_xml.indexOf("\">", pos_End + 2) + 2;
          pos_End = apps_xml.indexOf("</", pos_Start);
          data_JSON = data_JSON +  "\"" + apps_xml.substring(pos_Start, pos_End) + "\","; // app name
        }
        data_JSON.remove(data_JSON.length() - 1); // remove last comma
        data_JSON = data_JSON + "}},";
      }
    } else {
      // Serial.print("Error code: ");  Serial.println(httpResponseCode);
    }
    http.end();
  }
  data_JSON.remove(data_JSON.length() - 1); // remove last comma

  data_JSON = data_JSON + "}";
  return data_JSON;
}

bool send_to_Roku( String mssg ) {
  HTTPClient http;
  String serverPath = mssg;
  http.begin(serverPath.c_str());
  http.setConnectTimeout( 250 );

  int httpResponseCode = http.POST("");
  http.end();

  if (httpResponseCode > 0) {
    return true;
  } else {
    return false;
  }
}

void webSocketEvent(uint8_t num, WStype_t type, uint8_t *payload, size_t welength) {
  String payloadString = (const char *)payload;
  if (type == WStype_TEXT) {
    Serial.println(payloadString);
    if ( send_to_Roku( payloadString ) ) {
      JSONtxt = "{\"ECP_cmmnd\":\"DELIVERED\"}";
    } else {
      JSONtxt = "{\"ECP_cmmnd\":\"NOT_DELIVERED\"}";
    }
  } else if (type == WStype_CONNECTED) {
    JSONtxt = JSON_TV_Info;
  } else {
    JSONtxt = "{}";
  }
  semafor = true;
}
