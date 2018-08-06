<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

	 protected $fillable = [
        'tanggal', 'namatim', 'user_id', 'jam', 'harga'
    ];

    public function user()
    {

    	  
      	return $this->belongsTo('App\Model\User','user_id');
    }
}
