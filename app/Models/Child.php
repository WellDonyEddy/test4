<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Child extends Model
{
    use HasFactory;

    protected $table = 'children';
    protected $guarded = false;

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function caretakers(){
        return $this->belongsToMany(Caretaker::class);
    }

}
