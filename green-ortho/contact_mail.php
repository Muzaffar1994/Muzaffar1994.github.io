<?php

$toEmail = "sawakix@netfix.co.jp";
$toUser = $_POST["userEmail"];

$mailHeaders = "From: " . $_POST["fullname"] . "<". $_POST["userEmail"] .">\r\n";
$information = "フリガナ: " . $_POST["reading"] . "\n電話番号: " . $_POST["phoneNumber"] . "\n年齢: " . $_POST["age"] . "\n性別: " . $_POST["gender"] . "\n治療内容: " . $_POST["treatment"] . "\n予約第1希望日時: 第一希望日" . $_POST["month01"] . " 月" . $_POST["day01"] . " 日　時間" . $_POST["time01"] . "\n予約第2希望日時: 第一希望日" . $_POST["month02"] . " 月" . $_POST["day02"] . " 日　時間" . $_POST["time02"] . "\n予約第3希望日時: 第一希望日" . $_POST["month03"] . " 月" . $_POST["day03"] . " 日　時間" . $_POST["time03"] . "\n受信理由・ご希望: " . $_POST["comment"];


if(mail($toEmail, "Green Orthodontic Clinic Contact Mail", $information, $mailHeaders)) {
	if(mail($toUser, "Green Orthodontic Clinic Appoinment", $information, " ")) {
		print "<p class='success'>Success.</p>";
	} else {
		print "<p class='Error'>Error.</p>"; 
	}
} else {
	print "<p class='Error'>Error.</p>"; 
}

//メールが送信されました. success
//メールを送信できません. error

?>