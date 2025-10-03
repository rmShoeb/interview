<?php

require 'boilerplate.php';
require 'calculator.php';
require 'utilities.php';

if(!empty($_REQUEST)){
    $calculator = new Calculator($_REQUEST['op1'], $_REQUEST['op2']);
    $result = $calculator->calculate($_REQUEST['operator']);
    json_response($result);
}

?>