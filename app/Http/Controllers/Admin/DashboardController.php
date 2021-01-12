<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Transaction;
class DashboardController extends Controller
{
    //
    public function index(){
       
        return view('pages.admin.dashboard',[
            'travel_packages' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status','PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status','SUCCESS')->count(),
        ]);
    }
}
