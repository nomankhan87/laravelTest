<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

	//protected $table;
	//protected $primaryKey = 'id'; ""

	//mas assignment
	 protected $fillable = [
        'id',
        'name',
        'address',
        'phone',
    ];

	public $timestamps = false;


    //
}
