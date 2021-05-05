<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sponsor;

class SponsorController extends Controller
{

   //show all sponsors on sponsors page       
    public function index()
    {
        $sponsors = Sponsor::all();       
        return view('sponsors', compact('sponsors'));
    }

    //Show selected sponsor on sponsor page
       public function show($id)
    {   
        $sponsor = Sponsor::findOrFail($id);
         if($sponsor->specialContent == null){
         $sponsor->specialContent = 'assets/navygear.png';
         }
        return view('showSponsor', $sponsor);
    }     
}