 <?php
  

function send_LINE($msg){
 $access_token = 'DWEpfSWFnZDaKUzP1pmoBHex2KK+scerrJucYWTGLXmRk2l9qBepfLuiErSs0SmUprxNO07WRISb5vjJTtK48ojk88DIlPcnD0emjrui/x9GClYafEAXUs/OxlHa52sfOHJ/f0CyP3Sden4gXzrmQQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'fd683cf15f2d19632e0624a5af236f7a',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
