<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusApp extends Model
{
    public $timestamps = false; 
    use HasFactory;
   protected $guarded = [];
    protected $fillable = [        
        'under_18',
        'authorizedInUS',
        'levelOfEducation',
        'RelativeSponsers',
        'WorkForSponser',
        'EmployedWithSponser',
        'studentApplication_id',        
    ];
    
    
           public function Student_application()
    {
        return $this->belongsTo(Student_application::class);
    }
}