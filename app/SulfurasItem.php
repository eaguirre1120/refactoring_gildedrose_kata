<?php
require_once ('Item.php');
/**
 * @author Eyberth
 * @version 1.0
 * @created 14-jun.-2019 21:23:27
 */
class SulfurasItem extends Item
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
	}
}