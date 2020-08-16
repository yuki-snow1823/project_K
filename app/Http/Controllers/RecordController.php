<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    public function index()
    {
        $current_user = Auth::user();
        return view('/record', [ 'current_user' => $current_user ]);
    }
}
