<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\QueryParam;

/**
 * Show the form for creating a new resource
 */

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(9);

        return ProductResource::collection($products);
    }
    public function create(){

    }
    /**
     * Store a newly created resource in storage
     */
}
