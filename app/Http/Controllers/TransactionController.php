<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transition;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($date=NULL)
    {
        if($date == NULL){
            $date = date('Y') . '-' . date('m') . '-' . date('d');
        }

        $transaction = Transition::where('created_at', $date)->get();

        $transaction_income_dollar = Transition::where('created_at', $date)->where('type','income')->where('currency','$')->sum('amount');
        $transaction_income_lebanese = Transition::where('created_at', $date)->where('type','income')->where('currency','LL')->sum('amount');

        $transaction_outcome_dollar = Transition::where('created_at', $date)->where('type','outcome')->where('currency','$')->sum('amount');
        $transaction_outcome_lebanese = Transition::where('created_at', $date)->where('type','outcome')->where('currency','LL')->sum('amount');

        $transaction_net_dollar = $transaction_income_dollar - $transaction_outcome_dollar;
        $transaction_net_lebanese = $transaction_income_lebanese - $transaction_outcome_lebanese;

        $date_format = date_format(date_create($date),"D: d.m.Y");

        return view('transaction',compact('transaction','date','date_format','transaction_income_dollar','transaction_income_lebanese','transaction_outcome_dollar','transaction_outcome_lebanese','transaction_net_dollar','transaction_net_lebanese'));
    }

    public function addTransaction()
    {
        return view('add-transaction');
    }

    public function addTransactionPost(Request $request)
    {
        $transaction = new Transition;
        $transaction->type = $request->type;
        $transaction->amount = $request->amount;
        $transaction->currency = $request->currency;
        $transaction->created_at = $request->date;
        $transaction->description = $request->description;

        $latest_transaction = Transition::orderBy('id', 'DESC')->first();
        if($latest_transaction != null){
            $total_dollar =  $latest_transaction->total_dollar;
            $total_lebanese =  $latest_transaction->total_lebanese;

        }
        else{
            $total_dollar =  0;
            $total_lebanese =  0;
        }

        if($request->currency =='$'){
            if($request->type == 'income')
                $total_dollar +=  $request->amount;
            else
                $total_dollar -=  $request->amount;
        }
        else{
            if($request->type == 'income')
                $total_lebanese +=  $request->amount;
            else
                $total_lebanese -=  $request->amount;
        }

        $transaction->total_lebanese = $total_lebanese;
        $transaction->total_dollar = $total_dollar;

        $transaction->save();

        return redirect()->route('home');

    }
}
