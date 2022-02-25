<?php
// session_start();
namespace App;

/**
 * cart class
 */
class cart
{

    public function addToCart(product $product)
    {
        if (!$this->isPresent($product)) {
            echo "NOT PRESENT";
            $product->quantity = 1;

            array_push($_SESSION['cartArray'], $product);
        }
    }

    public function isPresent(product $product)
    {
        foreach ($_SESSION['cartArray'] as $key => $prod) {
            if ($prod->id == $product->id) {

                $_SESSION['cartArray'][$key]->quantity += 1;
                return true;
            }
        }
        return false;
    }


    public function edit($id, $newqty)
    {
        foreach ($_SESSION['cartArray'] as $key => $prod) {
            if ($prod->id == $id)
                $_SESSION['cartArray'][$key]->quantity = $newqty;
        }
    }


    public function delete($id)
    {
        foreach ($_SESSION['cartArray'] as $key => $prod) {
            if ($prod->id == $id) {
                array_splice($_SESSION['cartArray'], $key, 1);
            }
        }
    }

    public function emptyCart()
    {
        $_SESSION['cartArray'] = array();
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function displayCart()
    {

        $cartDisplay = "";
        //$totalqty = 0;
        $cartDisplay = "<table><tr><th> Product-ID </th><th> Product Name </th><th> Product Price </th><th> Product Quantity </th><th> Total Price </th><th> Action </th></tr>";

        foreach ($_SESSION['cartArray'] as $product) {

            $cartDisplay .= "<h3><tr><td>" . $product->id . "</td><td>" . $product->name . "</td><td>" . $product->price . "</td><form action='' method='post'><td><input style='display:none' name='input1' value='" . $product->id . "'><input type='box' name='input11' placeholder='" . $product->quantity . "'><button name='action' value='edit' >Edit</button></td><td>" . $product->price * $product->quantity . "</td><td><input style='display:none' name='deleteId' value='" . $product->id . "'><button name='action' value='delete' >X</button></td></form></tr></h3>";
          
        }


        $cartDisplay .= "</table>";
        //$cartDisplay .= "<br><h3> Total Quantity = " . $totalqty. "</h3>";
        $cartDisplay .= "<br><form action='' method='post'><h1><button name='action' value='empty'> EMPTY </button> </h1></form>";

        echo $cartDisplay;
    }
}
