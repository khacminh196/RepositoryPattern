<?php 

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface {
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }
}

