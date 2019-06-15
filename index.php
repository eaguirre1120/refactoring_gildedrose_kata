<?php
require_once 'app/GildedRose.php';
require_once 'app/Item.php';
require_once 'app/DefaultItem.php';
require_once 'app/AgedbrieItem.php';
require_once 'app/SulfurasItem.php';
require_once 'app/BackstagepassesItem.php';
require_once 'app/ConjuredItem.php';

echo "======== Updating items =========\n";
$items = [
    new DefaultItem('+5 Dexterity Vest', 10, 20),
    new AgedbrieItem('Aged Brie', 2, 0),
    new DefaultItem('Elixir of the Mongoose', 5, 7),
    new SulfurasItem('Sulfuras, Hand of Ragnaros', 0, 80),
    new SulfurasItem('Sulfuras, Hand of Ragnaros', -1, 80),
    new BackstagepassesItem('Backstage passes to a TAFKAL80ETC concert', 15, 20),
    new BackstagepassesItem('Backstage passes to a TAFKAL80ETC concert', 10, 49),
    new BackstagepassesItem('Backstage passes to a TAFKAL80ETC concert', 5, 49),
    // this conjured item does not work properly yet
    new ConjuredItem('Conjured Mana Cake', 3, 6)
];

$app = new GildedRose( $items );
$days = 2;
if ( count( $argv ) > 1 ) 
{
    $days = (int) $argv[1];
}
for ( $i = 0; $i < $days; $i++ ) 
{
    echo("========= Day $i =========\n");
    // echo("name, sellIn, quality\n");
    $app->printItems();
    // foreach ($items as $item) 
    // {
    //     echo $item . PHP_EOL;
    // }
    // echo PHP_EOL;
    $app->update_quality();
}