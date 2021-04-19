<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;



class ContactApp extends Model
{
    use HasFactory; 


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;

    protected $fillable = [
        
        'streetAddress',
        'address2',
        'city',
        'state',
        'zip',
        'primaryPhone',
        'altPhone',       
        'student_application_id',              
    ];
    
    protected $guarded = [];
    
     public function StudentApplication()
    {
        return $this->belongsTo(StudentApplication::class)->all();
    }
  
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
 

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    
}