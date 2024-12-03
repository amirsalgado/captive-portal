<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'visited_at'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}