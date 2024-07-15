<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastry extends Model
{
    use HasFactory;

    protected $fillable = ['item_id', 'flavor'];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
