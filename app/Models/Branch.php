<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'logo'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
