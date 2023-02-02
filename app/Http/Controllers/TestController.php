<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\CouponUsage;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request) {
        $request->validate([
            'email' => 'required|email|min:3|max:255',
            'password'
        ]);
        return view()->with(['errors' => ['email']]);
    }
}
