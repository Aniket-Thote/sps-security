<?php
$from = "raj.wakodikar24@gmail.com";

$to = "achaltumsare01@gmail.com";
$subject = "Short Leave";
//$message = "Hello Sir, Due to some personal emergency work I need a short leave today";

$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

$headers = "From: " . strip_tags($from) . "\r\n";
$headers .= 'Cc: ashwajitmesh@gmail.com' . "\r\n";
$headers .= 'Bcc: raj.wakodikar24@gmail.com' . "\r\n";
$headers .= "Reply-To: ". strip_tags($from) . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$mail = mail($to,$subject,$message,$headers);
if($mail){
	echo 'Email Sent successfully';
}else {
	echo "Please try again!";
}
?>