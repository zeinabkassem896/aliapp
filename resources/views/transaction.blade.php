@extends('welcome')

@section('content')

    <h2 class="display-4 display-end">
        <div>
           {{ $date_format }}
        </div>
        <div>
            <div class="input-group mb-6">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Select Date</label>
                </div>
                <input type="date" value={{$date}} class="form-control" aria-label="date" aria-describedby="basic-addon1" id="date_select" onchange="selectDate()">
                   
            </div>
        </div>
    
    </h2>
    
    <div class="cards">
        <div class="display-end">
            <div class="money-card  ">
                <div>{{ number_format($transaction_income_dollar,0,","," ")}} $</div>
                <div> {{number_format($transaction_income_lebanese,0,","," ")}} LL</div>
            </div>
            <div class="money-card outcome">
                <div>{{number_format($transaction_outcome_dollar,0,","," ")}} $</div>
                <div> {{number_format($transaction_outcome_lebanese,0,","," ")}} LL</div>
            </div>
                <div class="money-card net">
                <div>{{ number_format($transaction_net_dollar,0,","," ")}} $</div>
                <div>{{number_format($transaction_net_lebanese,0,","," ")}} LL</div>
            </div>
        </div>
        
    </div>
    <br/><br/>

    @if(sizeof($transaction)>0)

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
        
            <tr class="@if($each->type == 'income') income-tr @else outcome-tr @endif">
                <td >{{$key+1}}</th>
                <td>@if($each->currency == '$'){{number_format($each->amount,0,","," ")}}@endif</td>
                <td>@if($each->currency == 'LL'){{number_format($each->amount,0,","," ")}}@endif</td>
                <td>{{$each->description}}</td>
            </tr>
        @endforeach
        
        </tbody>
    </table>

    @else


    <h2 class="display-4 display-end">No Data </h2>


    @endif



    @endsection

<script>
    function selectDate(){
        var selected_date = document.getElementById("date_select").value;
        var url = "{{ route('transaction', ':id') }}";
        url = url.replace(':id', selected_date);
        document.location.href=url;
    }
</script>