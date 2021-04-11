<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sponsor;

class SponsorController extends Controller
{

          
    public function index()
    {
        $sponsors = Sponsor::all(); 
        
        return view('sponsors', compact('sponsors'));
    }



       public function show($id)
    {   
        $sponsor = Sponsor::findOrFail($id);
        return view('showSponsor', $sponsor);
    }


       
    // public function StoreSponsor(Request $request)
    // {
    //     //
    //     $storeData = $request->validate([
    //         'sponsor_name' => 'nullable|max:255',
    //         'comments' => 'nullable|max:255',
    //         'pic_url' => 'nullable|max:255',
    //         'contact_name' => 'nullable|max:255',
    //         'contact_email' => 'nullable|max:255',
    //         'contact_street_addr1' => 'nullable|max:255',
    //         'contact_street_addr2' => 'nullable|max:255',
    //         'contact_city' => 'nullable|max:255',
    //         'contact_state' => 'nullable|max:255',
    //         'contact_zip' => 'nullable|max:255',
    //         'contact_phone_num' => 'nullable|max:255',
    //     ]);
    //     $gsponsor = Gsponsor::create($storeData);

    //     return view('/admin/manageSponsors')->with('completed', 'Sponsor Data has been saved!');
    // }

}