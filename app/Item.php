<?php
abstract class Item 
{
    protected $name;
    protected $sell_in;
    protected $quality;

    abstract protected function update();

    public function __toString() 
    {
        return "{$this->name} | {$this->sell_in} | {$this->quality} \n";
    }
}