<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class questions extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'user_id', 'category_id', 'question',
    ];
    
    public function user()
    {
        return $this->belongsTo(User_profile::class);
    }

    public function category()
    {
        return $this->belongsTo(categories::class);
    }
}
