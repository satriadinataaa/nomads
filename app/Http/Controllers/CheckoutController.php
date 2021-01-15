<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function index(Request $request , $id){
        $item = Transaction::with(['details','travel-package','user'])->findOrFail($id);
        return view('pages.checkout',[
            'item' => $item
        ]);
    }

    public function process(Request $request , $id){
       $travel_package = TravelPackage::findOrFail($id);
       $transaction = Transaction::create([
           'travel_packages_id' => $id,
           'users_id' => Auth::user()->id,
           'additional_visa' => 0,
           'transaction_total' => $travel_package->price,
           'transaction_status' => 'IN_CART'
       ]);

       
    }

    public function remove(Request $remove , $detail_id){
       
    }

    public function create(Request $remove , $id){
       
    }

    public function success(Request $request,$id){
        return view('pages.success');
    }
}
