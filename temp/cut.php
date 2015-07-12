<?php
$sh = scws_open();
scws_set_charset($sh, 'gbk');
$text = "我是一个中国人，我会C++语言，我也有很多T恤衣服";
scws_send_text($sh, $text);
$top = scws_get_tops($sh, 5);
print_r($top);
?>