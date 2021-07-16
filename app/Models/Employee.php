<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $year=2021;
    use HasFactory;
     protected $fillable = [
        'name',
        'income',
        'tax-status'
    ];

    public function emloyee_income(){
         //we can make dynamic
        return $this->hasOne(EmployeeIncome::class)->where('year',$this->year);
    }
    public function emloyee_tax(){
        return $this->hasOne(EmployeeTax::class)->where('year',$this->year);
    }
     public function company(){
        return $this->belongsTo(Company::class);
    }
}
