<?php

/**
 * json_response
 * @param message: probably an associative array
*/
function json_response($message){
    // removing any unwanted strings from creating invalid json
    ob_clean();
    // cleaning existing headers
    header_remove();
    // setting content type to json
    header('Content-Type: application/json;charset=utf-8');
    // encoding php object to json
    echo json_encode(array('message' => $message));
    // making sure nothing else is added
    exit();
}

?>