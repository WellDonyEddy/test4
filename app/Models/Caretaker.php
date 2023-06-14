<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caretaker extends Model
{
    use HasFactory;
    public function children(){
        return $this->belongsToMany(Child::class);
    }
    protected $table = 'caretakers';
    protected $guarded = false;
}
