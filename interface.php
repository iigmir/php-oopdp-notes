<?php
include_once("./base-apis.php");

class AWater implements IFluid
{
    private $coffine = 0;
    public function wet()
    {
        return true;
    }
    public function result()
    {
        return array(
            "coffine" => $this->coffine,
            "wet" =>  $this->wet()
        );
    }
}

class ACoffee extends AWater
{
    private $coffine = 100;
    public function wet()
    {
        return true;
    }
    public function result()
    {
        return array(
            "coffine" =>  $this->coffine,
            "wet" =>  $this->wet()
        );
    }
}

/**
 * @see https://stackoverflow.com/a/32614767
 * @param mixed $input a class based on the `IFluid` interface
 * @return mixed
 */
function get_api($input)
{
    $object = new $input();
    return json_encode( $object->result() );
}

$result = isset($_GET["coffee"]) == "true" ? get_api(ACoffee::class) : get_api(AWater::class);
header("content-type: application/json");
echo($result);
