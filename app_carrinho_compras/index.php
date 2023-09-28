<?php

require __DIR__ . "/vendor/autoload.php";

use src\Item;
use src\Order;
use src\Emailservice;

echo 'With SRP<br>';

$order = new Order();
// -------------------------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescription('cup holder');
$item1->setValue(4.55);

$item2->setDescription('bicycle');
$item2->setValue(100.00);
// -------------------------------------------
echo '<h4>Order initiated</h4>';
echo '<pre>';
print_r($order);
echo '</pre>';
// -------------------------------------------
$order->getShoppingCart()->addItem($item1);
$order->getShoppingCart()->addItem($item2);
// -------------------------------------------
echo '<h4>Order with itens</h4>';
echo '<pre>';
print_r($order);
echo '</pre>';
// -------------------------------------------
echo '<h4>Cart items</h4>';
echo '<pre>';
print_r($order->getShoppingCart()->getItens());
echo '</pre>';
// -------------------------------------------
echo '<h4>Order value </h4>';
$total = 0;
foreach ($order->getShoppingCart()->getItens() as $key => $item) {
    $total += $item->getvalue();
}
echo $total;
// -------------------------------------------
echo '<h4>Is the cart valid?</h4>';
echo $order->getShoppingCart()->validatedCart();
// -------------------------------------------
echo '<h4>Status order</h4>';
echo $order->getStatus();
// -------------------------------------------
echo '<h4>Status order</h4>';
echo $order->getStatus();
// -------------------------------------------
echo '<h4>order confirmation</h4>';
echo $order->confirmation();
// -------------------------------------------
echo '<h4>Status order</h4>';
echo $order->getStatus();
// -------------------------------------------
echo '<h4>E-mail</h4>';
if ($order->getStatus() == 'Confirmation') {
   echo Emailservice::triggerEmail();
}








/*
print_r($trolley1->displayItems());
echo 'Value total: '.$trolley1->displayTotalValue();
$trolley1->addItems('bicycle', 750.41);
$trolley1->addItems('refrigerator', 100.50);
$trolley1->addItems('carpet', 100.41);

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
*/