<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provinces extends Model
{
    use HasApiTokens, SoftDeletes;

    protected $table = 'provinces';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'province_name', 
        'is_customer_active',
        'is_supplier_active',
        'employee_id',
    ]; 

    protected $dates = ['deleted_at'];

    public function municipality(){
        return $this->hasMany('App\Municipalities');
    }
}
