<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductController extends Controller
{
    protected $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $products = $this->repository->getAll();

        return response()->json($products);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $this->repository->create($request);

        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = $this->repository->findById($id);
        
        return response()->json($product);
    }
}
