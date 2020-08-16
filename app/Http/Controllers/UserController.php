<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController; // これを追加したけどダメ

class UserController extends Controller
{
    public function mypage()
    {
        return view('/user/mypage');
    }
}
