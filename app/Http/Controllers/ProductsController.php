<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public $categories;
    public function __construct(){
        $this->categories=[
            1=>[
                'name'=>'Категория 1',
                'products'=>[
                    1=>[
                        'name'=>'Продукт 1',
                        'cost'=>'300',
                        'inStock'=>true,
                        'desc'=>'Описвние продукта 1',
                    ],
                    2=>[
                        'name'=>'Продукт 2',
                        'cost'=>'400',
                        'inStock'=>true,
                        'desc'=>'Описание продукта 2',
                    ],
                    3=>[
                        'name'=>'Продукт 3',
                        'cost'=>'500',
                        'inStock'=>false,
                        'desc'=>'Описание продукта 3',
                    ],
                ],
            ],
            2=>[
                'name'=>'Категория 2',
                'products'=>[
                    1=>[
                        'name'=>'Продукт 1',
                        'cost'=>'700',
                        'inStock'=>true,
                        'desc'=>'Описание продукта 1',
                    ],
                    2=>[
                        'name'=>'Продукт 2',
                        'cost'=>'800',
                        'inStock'=>false,
                        'desc'=>'Описание продукта 2'
                    ],
                    3=>[
                        'name'=>'Продукт 3',
                        'cost'=>'900',
                        'inStock'=>false,
                        'desc'=>'Описание продукта 3',
                    ],
                ],
            ],
        ];
    }

    public function showProduct($category_id,$product_id){

        return view('product',[
            'category_id'=>$category_id,
            'category_name'=>$this->categories[$category_id],
            'products'=>$this->categories[$category_id]['products'][$product_id],
            'categories'=>$this->categories
        ]);
    }
    public function showCategory($category_id){

        return view('products',[
            'category_id'=>$category_id,
            'category'=>$this->categories[$category_id],
        ]);
    }
    public function showCategoryList(){

        return view('layout.app',[
            'categories'=>$this->categories,
        ]);
    }
}
