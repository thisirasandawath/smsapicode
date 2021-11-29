$url="https://smsgateway.greenline.lk/api/v3/sms/send";     //Enter API end point
$apitoken="5|fXvvlA24752dMdBhGMuH1L3GI4aOtewbxXbqioTk ";    //Enter API token 
$recipient="07######";                                      //Enter the recipient number
$senderid="Demo_Green";                                     //Enter sender ID
$message="Dummy Message";                                   //Enter the message
$postData = array(
           "recipient"=>$recipient,
           "sender_id"=>$senderid,
           "message"=>$message
                );
$headers = array(
               "Accept: application/json",
               "Authorization: Bearer ".$apitoken,
            );
$fields = json_encode($postData);
$ch = curl_init($url);
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
echo($result);
curl_close($ch);
