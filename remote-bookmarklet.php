<?php

header("Content-type: text/javascript");

//optionally load jQuery from a local source
/*
$code = file_get_contents('/jquery/jquery-1.6.4.min.js');
echo $code;
*/

$code = file_get_contents('code.js');
echo $code;

?>