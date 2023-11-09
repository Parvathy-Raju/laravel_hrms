<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'emp_id', 'name', 'fname', 'dob', 'gender', 'number', 'email', 'password', 'laddress', 'paddress', 'dept', 'designation', 'date_join', 'salary', 'hname', 'acnumber', 'bname', 'ifsc', 'pan', 'branch'
    ];
    
    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'emp_id', 'id');
    }
}
