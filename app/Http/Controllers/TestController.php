<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function root()
    {
        \Log::debug('kelu test');
        dd(route('payment.alipay.notify'));
    }
}
