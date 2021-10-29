<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart
{
    public $items;
    public $totalQuantity;
    public $subtotal;
    public $totalPrice;
    public $tax;
    public $promotion;
    public $shipping;
    private const VAT = 0.15;


    /**
     * Initialize items array, total quantity and total price fields
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [];
        $this->subtotal = 0.00;
        $this->totalPrice = 0.00;
        $this->tax = 0.00;
        $this->promotion = 0.00;
        $this->totalQuantity = 0;
    }

    /**
     * Check if the product exists in this cart
     *
     * @param  int  $product_id
     * @return boolean 
     */
    public function productExistsInCart($product_id)
    {
        $productExists = false;

        foreach($this->items as $item){
            if($item['product_id'] == $product_id){
                $productExists = true;
                break;
            }
        }
        return $productExists;
    }

    /**
     * Remove product from this cart
     *
     * @param integer $product_id
     * @return void
     */
    public function removeProduct($product_id)
    {
        foreach($this->items as $key => $item)
        {
            if($item['product_id'] == $product_id){
                if(count($this->items) == 1)
                    session()->forget('cart');
                else{
                    $this->totalQuantity -= $this->items[$key]['quantity'];
                    $this->subtotal -= $this->items[$key]['total'];
                    $this->totalPrice -= $this->items[$key]['total'];
                    // $this->tax = $this->totalPrice * self::VAT;
                    array_splice($this->items, $key, 1);

                    session(['cart' => $this]);
                }
            }   
        }
    }

    /**
     * Add product to this cart
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function addProduct($request)
    {
        $product = Product::findOrFail($request->input('product_id'));

        if($this->productExistsInCart($product->id))
            $this->addExistingProductToCart($product, $request->input('quantity'));
        else{
            $cartItem = ['product_id' => $product->id, 
                         'quantity' => $request->input('quantity'),
                         'total' => $product->price * $request->input('quantity')
            ];

            array_unshift($this->items, $cartItem);
            $this->totalQuantity += $cartItem['quantity'];
            $this->subtotal += $cartItem['total'];
            $this->totalPrice += $cartItem['total'];
            // $this->tax = $this->totalPrice * self::VAT;
        }    
    }

    /**
     * Add product that already exists in this cart 
     *
     * @param int $quantity
     * @return void
     */
    public function addExistingProductToCart(Product $product, $quantity)
    {
        foreach($this->items as $key => $item){
            if($item['product_id'] == $product->id){
                $this->items[$key]['quantity'] += $quantity;
                $this->items[$key]['total'] += ($quantity * $product->price);

                $this->totalQuantity += $quantity;
                $this->totalPrice += ($quantity * $product->price);
                // $this->tax = $this->totalPrice * self::VAT;
                break;
            }
        }
    }

    /**
     * Get all the products that are in this cart using primary keys
     *
     * @return array $products
     */
    public function cartProducts()
    {
        $collection = collect(Arr::pluck($this->items, 'product_id'));

        return $collection->map(function($product_id, $key){
            return Product::findOrFail($product_id);
        });
    }
}
