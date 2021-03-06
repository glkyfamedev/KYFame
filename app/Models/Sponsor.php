<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

      protected $fillable = [
          
              'sponsor_name', 
              'bodyText',
              'headertext',
              'missionText',
              'specialContent',
              'pic_path', 
              'contact_name', 
              'contact_email', 
              'contact_street_addr1',
              'contact_street_addr2',
              'contact_city',
              'contact_state',
              'contact_zip', 
              'contact_phone_num'
              ];    
}