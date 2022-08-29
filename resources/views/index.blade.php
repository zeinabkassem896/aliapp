@extends('welcome')

@section('content')
  
        <h2 class="display-4 display-end">
            <div>
                @php
                    echo(date("D: d.m.Y"));
                @endphp
            </div>
            <div>
                @php
                    echo(date("h:i a"));
                @endphp
            </div>
        
        </h2>
       
        <div class="cards">
            <div class="display-end">
                <div class="money-card  ">
                    <div>{{number_format($sum_income_dollar,0,","," ")}} $</div>
                    <div> {{number_format($sum_income_lebanese,0,","," ")}} LL</div>
                </div>
                <div class="money-card outcome">
                    <div>{{number_format($sum_outcome_dollar,0,","," ")}} $</div>
                    <div> {{number_format($sum_outcome_lebanese,0,","," ")}} LL</div>
                </div>
                 <div class="money-card net">
                    <div>{{number_format($total_dollar,0,","," ")}} $</div>
                    <div>{{number_format($total_lebanese,0,","," ")}} LL</div>
                </div>
            </div>
            
        </div>
        <br/><br/>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Amount ($)</th>
                <th scope="col">Amount (LL)</th>
                <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
            @foreach($transaction as $key=>$each)
                <tr class="@if($each->type == 'outcome') outcome-tr @else income-tr @endif">
                    <td >{{$key+1}}</th>
                    <td>@if($each->currency == '$') {{number_format($each->amount,0,","," ")}} @endif</td>
                    <td>@if($each->currency == 'LL') {{number_format($each->amount,0,","," ")}} @endif</td>
                    <td>{{$each->description}}</td>
                </tr>
                @endforeach
               
            </tbody>
            </table>

    @endsection