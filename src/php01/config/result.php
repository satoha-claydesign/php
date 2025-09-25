<?php
$your_name = htmlspecialchars($_POST['your_name'], ENT_QUOTES);
$request_set = htmlspecialchars($_POST['request_set'], ENT_QUOTES);
$request_number = htmlspecialchars($_POST['request_number'], ENT_QUOTES);
// $company = htmlspecialchars($_GET['company'], ENT_QUOTES);
print "私の名前は" . $your_name . '<br />'. "ご希望の商品は、" . $request_set. '<br />' . "注文数は、" . $request_number;