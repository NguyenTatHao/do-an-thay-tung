<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = FacadesCart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        FacadesCart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');
    }
    public function decreaseQuantity($rowId)
    {
        $product = FacadesCart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        FacadesCart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');
    }
    public function destroy($id)
    {
        FacadesCart::instance('cart')->remove($id);
        $this->emitTo('cart-icon-component','refreshComponent');
        session()->flash('success_message','Item has been removed');
    }
    public function clearAll()
    {
        FacadesCart::instance('cart')->destroy();
        $this->emitTo('cart-icon-component','refreshComponent');
    }

    public function render()
    {
        return view('livewire.cart-component');
    }
}
