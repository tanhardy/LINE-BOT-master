<?php

$strAccessToken = "YAUg5wm0qQbIA3a9LwA4XntIf9i22QRy9v296uj+fjqA6nFPBo8Hrxs34vT/fzd640sMUNVyDoMB1QN+708xZOyfVsFjHH3H5dqG87PenA9iKT64JNnm+n3HT0frX0VT5G79cmHoyP4d/vKq9f60PQdB04t89/1O/w1cDnyilFU=";

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);

$strUrl = "https://api.line.me/v2/bot/message/reply";

$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
}else if($arrJson['events'][0]['message']['text'] == "ชื่ออะไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "น้อมิราจจ้า";
}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรได้บ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "โปรดเลือกคำสั่ง 1.STOCK 2.ราคาขาย 3.โปรโมชั่น 4.อื่นๆ";
}else if($arrJson['events'][0]['message']['text'] == "OKay"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ขอบคุณที่ใช้บริการงับ";
}else if($arrJson['events'][0]['message']['text'] == "ราคาขาย"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "โปรดเลือกยี่ห้อ ดังนี้ 1.SalePioneer 2.SaleMercury 3.SaleKenwood 4.SaleGroudZero 5.SaleTop-Palace 6.SaleGenesis 7.Saleเพิ่มเติม";
}else if($arrJson['events'][0]['message']['text'] == "Saleเพิ่มเติม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "โปรดเลือกยี่ห้อ ดังนี้ 8.SaleAndroid 9.SaleAudison 10.SaleFocal 11.SaleFlux 12.Saleกล้องบันทึก";
}else if($arrJson['events'][0]['message']['text'] == "SalePioneer"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "โปรดเลือกรุ่นดังนี้ AVH-Z9150BT , AVH-Z5150BT , AVH-A205BT , AVH-A105DVD , AVH-Z7050BT หรือรุ่นอื่นๆเป็นต้น";
}else if($arrJson['events'][0]['message']['text'] == "STOCK"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "โปรดเลือกยี่ห้อ ดังนี้ 1.STPioneer 2.STMercury 3.STKenwood 4.STGroudZero 5.STTop-Palace 6.STGenesis 7.STเพิ่มเติม";
}else if($arrJson['events'][0]['message']['text'] == "STเพิ่มเติม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "โปรดเลือกยี่ห้อ ดังนี้ 8.STAndroid 9.STAudison 10.STFocal 11.STFlux 12.STกล้องบันทึก";
}else if($arrJson['events'][0]['message']['text'] == "โปรโมชั่น"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถตรวจทางหน้าเว็บได้ที่ ลิงค์ http://www.miragecaraudio.com/promotion";
}else if($arrJson['events'][0]['message']['text'] == "อื่นๆ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เช็คพิกัดGoogleMaps , แผนที่มิราจ , Website ";
}else if($arrJson['events'][0]['message']['text'] == "แผนที่มิราจ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['image'] = "http://www.miragecaraudio.com/photos/1/news%20&%20activity/mirage%20expo18/New_Maps.jpg";
}else if($arrJson['events'][0]['message']['text'] == "เช็คพิกัดGoogleMaps"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "พิกัดนี่เลย!! https://goo.gl/maps/qYsHLdwCfht";
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันยังไม่มีคำสั่งนี้ในระบบ รอการปรับปรุงจ้า";
}


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);

?>
