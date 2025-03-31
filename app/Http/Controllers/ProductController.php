<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __invoke()
    {
        $products = Product::paginate();

        return response()->json($products);
    }
}
