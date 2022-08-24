@extends('welcome')
@extends('nav')

@section('content')
  
        
       
            

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