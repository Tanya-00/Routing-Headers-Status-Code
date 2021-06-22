<?php
var_dump(http_response_code(403));
var_dump(http_response_code());

header("HTTP/1.0 403 Эх, кажется вы недостойны");

?>