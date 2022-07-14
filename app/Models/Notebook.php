<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','firm_id','phone','email','birth_date','image'];

    public function firm(){
        return $this->belongsTo(Firm::class);
    }
}
