<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Auth; // 長くしてみた
// use App\Http\Controllers\UserController; // これを追加したけどダメ→要らなそう

class UserController extends Controller
{
    public function mypage()
    {
        $current_user = Auth::user();
        return view('/user/mypage', [ 'current_user' => $current_user ]);
    }
}
