<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer_group extends Model
{
    protected $table = 'customer_group';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [

    ];


    public function customers()
    {
        return $this->hasMany('App\Models\Customers','cust_group');
    }


}
