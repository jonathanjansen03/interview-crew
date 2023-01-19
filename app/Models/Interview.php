<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'date', 'field_id'];

    public function field(){
        return $this->belongsTo('App\Models\Field');
    }
}
