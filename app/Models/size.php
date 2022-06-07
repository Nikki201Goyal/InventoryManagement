<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class size extends Model
{
    use HasFactory;
    protected $fillable=['size'];

    public function Item()
    {
        return $this->hasMany(Item::class);
    }
}
