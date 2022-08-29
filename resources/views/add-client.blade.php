@extends('welcome')

@section('content')

    <form action={{route('add-client-post')}} method="POST">
        @csrf
        <input type="hidden" name="location_2" value="1" id="location_value" value="0">
   
  
        <h2 class="display-4 display-end">
           
            Add New Client
        </h2>
        <br/>
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">First Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Firstname" aria-label="Firstname" aria-describedby="basic-addon1" name="fname">
                </div>
            </div>
            <div class="col-6">
            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Last Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Lastname" aria-label="Lastname" aria-describedby="basic-addon1" name="lname">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Phone</span>
                    </div>
                    <input type="text" class="form-control" placeholder="76190038" aria-label="Phone" aria-describedby="basic-addon1" name="phone">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Home</span>
                    </div>
                    <input type="text" class="form-control" placeholder="01477911" aria-label="Phone2" aria-describedby="basic-addon1" name="home">
                </div>
            </div>
        </div>

         <br>
        <div class="row">
            <div class="col-12">
               <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Description</span>
                    </div>
                    <textarea class="form-control" aria-label="Description" name="description"></textarea>
                </div>
            </div>
        </div>

        <br>
        <br>
         <div class="row">
            <div class="col-6">
                <h2 class="display-4 display-end subtitle"> Location </h2>
            </div>
            <div class="col-6 flex-end">
               <div  class="btn btn-primary btn-lg add-button" id="add-button" onClick="showHideDiv()">+</div>
            </div>
        </div>
        
        <br>
        <div>
            <div class="row">
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">City</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Dahye" aria-label="City" aria-describedby="basic-addon1" name="city">
                    </div>
                </div>
                <div class="col-6">
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Street</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Hadi Nasrallah" aria-label="street" aria-describedby="basic-addon1" name="street">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Building</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Building" aria-label="building" aria-describedby="basic-addon1" name="building">
                    </div>
                </div>
                <div class="col-6">
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Floor</span>
                        </div>
                        <input type="number" class="form-control" min="0" aria-label="floor" aria-describedby="basic-addon1" name="floor">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Description</span>
                        </div>
                        <textarea class="form-control" aria-label="Description" name="location_description" ></textarea>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <div class="hide" id="location2_div">
            <hr class="seperator">
            <br>
      
            <div class="row">
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">City</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Dahye" aria-label="City" aria-describedby="basic-addon1" name="city2">
                    </div>
                </div>
                <div class="col-6">
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Street</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Hadi Nasrallah" aria-label="Lastname" aria-describedby="basic-addon1" name="street2">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Building</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Building" aria-label="City" aria-describedby="basic-addon1" name="building2">
                    </div>
                </div>
                <div class="col-6">
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Floor</span>
                        </div>
                        <input type="number" class="form-control" min="0" aria-label="floor" aria-describedby="basic-addon1" name="floor2">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Description</span>
                        </div>
                        <textarea class="form-control" aria-label="Description" name="description2" ></textarea>
                    </div>
                </div>
            </div>
            <br>
        </div>

        <br>
        <div class="row">
            <div class="col-12 flex-end">
                <button type="submit" class="btn btn-primary btn-lg">Save</button>
            </div>
        </div>    

    </form>  

 
@endsection

<script>
    function showHideDiv(){
        var location = document.getElementById("location_value");
        var location_div = document.querySelector("#location2_div");
        var add_button = document.getElementById("add-button")
  
        console.log("kjhkj")

        if(location.value == 1){
            location.value = 0;
            location_div.classList.remove("hide");
            add_button.innerHTML = "-";
        }
        else{

            location.value = 1;
             location_div.classList.add("hide");
             add_button.innerHTML = "+";
        }

    }
</script>