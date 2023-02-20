<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\CouponUsage;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request) {
        dd('you are now in test controller');
    }
}
