<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'ratings';

    protected $fillable = ['komentar','rating','cafe_id'];

    public function user()
    {
        return $this->belongsTo(User::class); // setiap review itu punya 1 user
    }

    public function cafe()
    {
        return $this->belongsTo(Cafe::class); // setiap review itu punya 1 cafe
    }
}
