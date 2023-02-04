<?php
include_once("./base-apis.php");

class John extends PersonInterface
{
    protected $name = "John";
}

$result = json_encode( (new John())->result() );
header("content-type: application/json");
echo($result);
