<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class StudentApplication extends Model
{
    use HasFactory;
    //protected $table = 'student_applications';
    // const CREATED_AT = 'name_of_created_at_column';
    // const UPDATED_AT = 'name_of_updated_at_column';
    
    public $timestamps = false; 
    
    function StudentApplication() {
        $user_id = Auth::user()->id;        
    }
    
     

    
    protected $with = [
        // 'contactApp', 
        // 'statusApp',
        // 'employmentApp',
        // 'assesmentApp',   
        // 'user'      
    ];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'start_date',
      'complete_date',
      'transcript_method',
      'transcript_path',
      'essay',
      'app_action',
      'current_section',
      'status',
      'qualified',
      'completed_date',
      'user_id',
                     
    ];

    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(user::class);
    }    
    
    public function contactApp()
    {
        return $this->hasOne(ContactApp::class);
    }

    public function employmentApp()
    {
        return $this->hasMany(EmploymentApp::class);
    }

    public function assesmentApp()
    {
        return $this->hasOne(AssesmentApp::class);
    }

    public function statusApp()
    {
        return $this->hasOne(StatusApp::class);
    }

}