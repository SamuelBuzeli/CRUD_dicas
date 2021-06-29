<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dicas extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'tip',
        'brand',
        'model',
        'version',
        'user_send_id',
        
    ];

    public function getCreatedAtFormatAttribute()
    {
        return $this->created_at->format('d/m/y');
    }
}