<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


use App\Models\Client;
use App\Models\Location;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::all();
        return view('clients',compact('clients'));
    }
    
    public function addClient()
    {
        return view('add-client');
    }

    public function addClientPost(Request $request)
    {


        if(!empty($request->client_id)){
            $client = Client::where('id',$request->client_id)->first();
            $all_locations = DB::table('client_location')->where('client_id',$request->client_id)->get();
            foreach($all_locations as $each){
                Location::where('id',$each->location_id)->delete();
            }
        }
        else{
            $client = new Client;
        }

        
        $client->first_name = $request->fname;
        $client->last_name = $request->lname;
        $client->phone = $request->phone;
        $client->home = $request->home;
        $client->description = $request->description;
        $client->save();

        $location = new Location;
       
        $location->city = $request->city;
        $location->street = $request->street;
        $location->floor = $request->floor;
        $location->description = $request->location_description;
        $location->save();

        $location->clients()->attach($client->id);
    
        
        if($request->location_2 == 0){

            $location = new Location;

            $location->city = $request->city2;
            $location->street = $request->street2;
            $location->floor = $request->floor2;
            $location->description = $request->description2;
            $location->save();
           
            $location->clients()->attach($client->id);
            
           
        }

        return redirect()->route('client');
    }

    public function edit($id){
        $client = Client::where('id',$id)->first();

        return view('add-client',compact('client'));
    }
}
