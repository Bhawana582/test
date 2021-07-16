<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $year=2021; //future in dynamic
    use HasFactory;
    protected $fillable = [
        'name',
        'income',
        'tax-status'
    ];
    public function company_income(){
         //we can make dynamic
        return $this->hasOne(CompanyIncome::class)->where('year',$this->year);
    }
    public function company_tax(){
        return $this->hasOne(CompanyTax::class)->where('year',$this->year);
    }
}

