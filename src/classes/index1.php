<?php
use App\cart;
use App\product;

require('vendor/autoload.php');
$productArray = array();

function ProductList()
{
    global $productArray;
    include('config.php');
    foreach ($products as $product) {
        $p = new product($product['id'], $product['name'], $product['image'], $product['price']);
        array_push($productArray, $p);
    }
}
function displayProducts()
{


    global $productArray;

    $dis = "";
    foreach ($productArray as $product) {
        $dis .= "<div id='product-'" . $product->id . "' class='product'><form action='' method='post'><img src='images/" . $product->image . "'><h3 class='title'><a href='#'>Product " . $product->id . "</a></h3><span>Price: $" . $product->price . "</span><input style='display:none' name='add' value='" . $product->id . "'><button class='add-to-cart'  name='action' value='add'>Add To Cart</button></form></div>";
    }
    echo $dis;
}
function getProduct($id)
{
    global $productArray;
    foreach ($productArray as $product) {
        if ($product->id == $id) {
            $cart = new cart();
            $cart->addToCart($product);
            return;
        }
    }
}
function edit($id, $newqty)
{
    $cart = new cart();
    $cart->edit($id, $newqty);
}
function delete($id)
{
    $cart = new cart();
    $cart->delete($id);
}
function emptyList()
{
    $cart = new cart();
    $cart->emptyCart();
}
function displayCart()
{
    $cart = new cart();
    $cart->displayCart();
}
