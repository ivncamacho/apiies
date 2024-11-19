<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\QueryParam;

/**
 * @group Products
 *
 * Managing products
 *
 * @queryParam page int The page number. Example: 1
 */
#[Group('Categories', description: 'Managing categories')]
#[QueryParam('page', 'int', 'The page number', example: 1)]
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(9);

        return ProductResource::collection($products);
    }
}
