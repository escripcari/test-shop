<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Util\Test;

class mailController extends Controller
{

    public function sendEmail($product, $msg)
    {

        $details = [
            'title' => 'Это письмо с моего сайта',
            'body' => [
                'prod' => [
                    'name_product'=>$product['name'],
                    'count' => $product['count'],
                    'price' => $product['price']
                ],
                'custom_info' =>[
                    "name"=>$msg['name'],
                    "phone"=>$msg['phone']
                ]
            ],
        ];

        Mail::to("escripcari@gmail.com")->send(new TestMail($details));
        return redirect()->route('index');
    }
}
