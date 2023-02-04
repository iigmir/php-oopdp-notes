<?php

/**
 * @see https://stackoverflow.com/a/12887127
 */
interface IFluid
{
    /**
     * Of course it should returns wet, but the inherience system force you to implement this method and interface itself cannot include properties.
     * (PHP2435)
     * @return bool A boolean value.
     */
    public function wet();
    /**
     * Summary of result
     * @return array A JSON array
     */
    public function result();
}

abstract class PersonInterface
{
    private $scientific_name = "Homo sapiens";
    protected $name = "";
    public function result()
    {
        return array(
            "scientific_name" => $this->scientific_name,
            "name" => $this->name
        );
    }
}
