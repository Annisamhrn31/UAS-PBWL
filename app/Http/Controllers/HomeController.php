<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use App\Models\Member;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        $transaksi = Transaksi::count();
        $operator = User::count();
        $member = Member::count();
        return view('home', compact('transaksi', 'operator', 'member'));
    }
}
