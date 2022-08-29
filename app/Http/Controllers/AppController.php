<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transition;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transition::where('created_at', date('Y-m-d'))->get();

        $sum_income_dollar = Transition::where('type','income')->where('currency','$')->sum('amount');
        $sum_income_lebanese = Transition::where('type','income')->where('currency','LL')->sum('amount');

        $sum_outcome_dollar = Transition::where('type','outcome')->where('currency','$')->sum('amount');
        $sum_outcome_lebanese = Transition::where('type','outcome')->where('currency','LL')->sum('amount');

        $total_lebanese = $sum_income_lebanese - $sum_outcome_lebanese;
        $total_dollar = $sum_income_dollar - $sum_outcome_dollar;

        return view('index',compact('transaction','sum_income_dollar', 'sum_income_lebanese', 'sum_outcome_dollar', 'sum_outcome_lebanese', 'total_lebanese', 'total_dollar'));
    }
}
