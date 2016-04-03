<?php
var_dump(is_numeric("0xafd13"));    // bool(false)
var_dump("0xa" == 10);              // bool(false)

$int = filter_var("0xfa", FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_HEX);
var_dump($int);                     //int(250)

//bonus - unicode characters escaping
var_dump("\u{0FD5}");