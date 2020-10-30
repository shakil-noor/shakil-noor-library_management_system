<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'logo', 'description'
    ];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
