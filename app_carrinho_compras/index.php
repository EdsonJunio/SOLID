<?php

require __DIR__."/vendor/autoload.php";
use src\ShoppingCart;

$trolley1 = new ShoppingCart();
print_r($trolley1->displayItems());
echo 'Value total: '.$trolley1->displayTotalValue();

$trolley1->addItems('bicycle', 750.41);
/*$trolley1->addItems('refrigerator', 100.50);
$trolley1->addItems('carpet', 100.41);*/

echo "<br />";
print_r($trolley1->displayItems());
echo "<br />";
echo 'Value total: '.$trolley1->displayTotalValue();

echo "<br />";
echo 'status: ' . $trolley1->displayStatus();

echo "<br />";
if($trolley1->confirmOrders()) {
    echo 'order validated successfully';
} else {
     echo 'Order confirmation error. Cart has no items';
};
echo "<br />";
echo 'status: ' . $trolley1->displayStatus();