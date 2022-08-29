@extends('welcome')

@section('content')

    <form action={{route('add-transaction-post')}} method="POST">
        @csrf

        @php
        $today = date('Y') . '-' . date('m') . '-' . date('d');
        @endphp
   
  
        <h2 class="display-4 display-end">
           
            Add New Transaction
        </h2>
        <br/>
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Amout</span>
                    </div>
                    <input type="number" min="0" class="form-control" placeholder="100" aria-label="amount" aria-describedby="basic-addon1" name="amount">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Currency</label>
                    </div>
                    <select class="custom-select form-control" name="currency">
                        <option value="$">$</option>
                        <option value="LL">LL</option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Type</label>
                    </div>
                    <select class="custom-select form-control" name="type">
                        <option value="income">Income</option>
                        <option value="outcome">Outcome</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
               <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                    <input type="date" value="<?php echo $today; ?>" class="form-control" aria-label="date" aria-describedby="basic-addon1" name="date">

                   
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Description</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Description .." aria-label="description" name="description">
                </div>
            </div>
        </div>

         <br>

        <br>
        <div class="row">
            <div class="col-12 flex-end">
                <button type="submit" class="btn btn-primary btn-lg">Save</button>
            </div>
        </div>    

    </form>  

 
@endsection
