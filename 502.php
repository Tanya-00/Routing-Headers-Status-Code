<?php
var_dump(http_response_code(502));
var_dump(http_response_code());

header("HTTP/1.0 502 О да, любимая ошибка личного кабинета ДВФУ");

?>