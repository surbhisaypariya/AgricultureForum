<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_info extends Model
{
    
    protected $table = "product_infos";
    protected $fillable=[
    	'title','photo','description'
    ];
}
