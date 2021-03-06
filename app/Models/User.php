<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable; // implements MustVerifyEmail -- Add later for email vaerification



    protected $with = [
       'studentApplication',
       
    ];
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role',
   
        // 'student_application_id',
        
    ];
    public function StudentRole()
    { 
        $students = User::where('role', 'Student')->get();    
        return $students; 
    }
     public function AdminRole()
     {
     $admin = User::where('role', 'Admin')->get();
     return $admin;
     }
  


  public function StudentApplication()
    {
        return $this->hasOne(StudentApplication::class);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}