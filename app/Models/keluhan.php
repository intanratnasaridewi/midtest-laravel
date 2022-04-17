<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluhan extends Model
{
    use HasFactory;
    protected $table = 'keluhans';
    protected $guarded = ['id'];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
