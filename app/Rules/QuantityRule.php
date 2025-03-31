<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Product;

class QuantityRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $productId = request()->product_id;

       $product =  Product::find($productId);


       if ($product->stock < $value) {
           $fail('The quantity exceeds the available stock.');
        
       }
    }
}
