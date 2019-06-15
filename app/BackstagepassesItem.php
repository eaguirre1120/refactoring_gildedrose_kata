<?php
require_once ('Item.php');
/**
 * @author Eyberth
 * @version 1.0
 * @created 14-jun.-2019 21:23:40
 */
class BackstagepassesItem extends Item
{
	public function __construct( $name, $sell_in, $quality )
	{
		$this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
	}

	public function update()
	{
		if ( $this->quality > 0 && $this->quality < 50 )
		{
			$this->quality = $this->quality + 1;
	        if ( $this->sell_in < 11 ) 
	        {
	            $this->quality = $this->quality + 1;
	        }
	        if ( $this->sell_in < 6 ) 
	        {
	            $this->quality = $this->quality + 1;
	        }
    	}
    	
    	$this->sell_in = $this->sell_in - 1;
    	
    	if ( $this->sell_in < 0 )
		{
			$this->quality = $this->quality - $this->quality;
		}
	}
}