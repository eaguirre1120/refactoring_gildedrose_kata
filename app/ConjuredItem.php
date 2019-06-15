<?php
require_once ('Item.php');
/**
 * @author Eyberth
 * @version 1.0
 * @created 14-jun.-2019 21:23:52
 */
class ConjuredItem extends Item
{
	public function __construct( $name, $sell_in, $quality )
	{
		$this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
	}

	public function update()
	{
		// echo "Updated {$this->name} \n";
		if ( $this->quality > 0 && $this->quality < 50 )
		{
			$this->quality = $this->quality - 2;
		}
		$this->sell_in = $this->sell_in - 1;
    	if ( $this->sell_in < 0 )
		{
			$this->quality = $this->quality - 2;
		}
	}
}