<?php
var_dump(null ?? "right value when null");
// string(21) "right value when null"

var_dump($inexistentVariable ?? "when variable is not set");
// string(24) "when variable is not set"

var_dump(null ?? null ?? "when multiple");
// string(13) "when multiple"

var_dump(false ?? "will never happen");
// bool(false)