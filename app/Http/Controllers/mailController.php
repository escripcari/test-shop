<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Util\Test;

class mailController extends Controller
{
    public $name_product;
    public $count;
    public $price;

    public function sendEmail($product, $request)
    {
        $this->name_product = $product['name'];
        $this->count = $product['count'];
        $this->price = $product['price'];

        $details = [
            'title' => 'Это письмо с моего сайта',
            'body' => [
                'prod' => [
                    'name_product'=>$product['name'],
                    'count' => $product['count'],
                    'price' => $product['price']
                ],
                'custom_info' =>[
                    $request['name'],
                    $request['email'],
                    $request['phone']
                ]
            ],
        ];

        Mail::to("escripcari@gmail.com")->send(new TestMail($details));
        return redirect()->route('index');
    }
}
