<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'quanity',
        'status'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quanity');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
