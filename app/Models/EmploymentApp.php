<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentApp extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    //        protected $fillable = [
               
    //   'employerName',
    //   'employerPhone',
    //   'employmentStart',
    //   'employmentEnd',
    //   'reasonForLeaving',
    //   'completedDate',
    //   'studentApplication_id',
    // ];

         public function Student_application()
    {
        return $this->belongsTo(Student_application::class);
    }


}