<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;


    public $timestamps = false;
    public function field(){
        return $this->belongsTo('App\Models\Field');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
