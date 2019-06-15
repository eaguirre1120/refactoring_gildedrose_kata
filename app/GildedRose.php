<?php
class GildedRose 
{
    private $items;
    
    public function __construct( $items ) 
    {
        $this->items = $items;
    }
    
    public function update_quality() 
    {
        foreach ( $this->items as $item ) 
        {
            $item->update();
        }
    }

    public function printItems()
    {
        echo("NAME | SELLIN | QUALITY\n");
        foreach ( $this->items as $item ) 
        {
            echo $item . PHP_EOL;
        }
        echo PHP_EOL;
    }
}