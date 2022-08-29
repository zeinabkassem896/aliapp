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
                    <div>100 $</div>
                    <div> 200 000 LL</div>
                </div>
                <div class="money-card outcome">
                    <div>100 $</div>
                    <div> 200 000 LL</div>
                </div>
                 <div class="money-card net">
                    <div>100 $</div>
                    <div> 200 000 LL</div>
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
                <tr class="outcome-tr">
                    <td >1</th>
                    <td>100</td>
                    <td></td>
                    <td>hello dear</td>
                </tr>
                <tr class="income-tr">
                    <td>2</th>
                    <td>1000</td>
                    <td>200 000</td>
                    <td>@fat</td>
                </tr>
                <tr class="income-tr">
                    <td >1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
            </table>

    @endsection