<?php

namespace App\Http\Controllers;
use AmrShawky\LaravelCurrency\Facade\Currency;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    
    public function ConvertCurrency(Request $request){
        $from = $request->from;
        $to = $request->to;
        $amount= $request->amount;
        $converted=Currency::convert()
            ->from($USD) //currncy you are converting
            ->to(৳BDT)     // currency you are converting to
            ->amount(87) // amount in USD you converting to EUR
            ->get();

    return view('blade_name',compact('converted'));
    }
}

