<?php
$sh = scws_open();
scws_set_charset($sh, 'gbk');
$text = "����һ���й��ˣ��һ�C++���ԣ���Ҳ�кܶ�T���·�";
scws_send_text($sh, $text);
$top = scws_get_tops($sh, 5);
print_r($top);
?>