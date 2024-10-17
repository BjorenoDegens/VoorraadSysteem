<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Index extends Component
{
    public function render()
    {
        return view('livewire.product.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product is verwijderd!');
    }
}