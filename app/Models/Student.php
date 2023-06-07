<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Document;

class Student extends Model
{
    use HasFactory;


    public function documents(){
        return $this->hasMany(Document::class);
    }

}
