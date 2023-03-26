<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;
    // protected $table = 'developers';
    public $timestamps = false;
    public function getDeveloperUser()
    {
        return $this->belongsTo(User::class);
    }
}
