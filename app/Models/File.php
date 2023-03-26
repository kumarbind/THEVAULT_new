<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class File extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function getFileUser()
    {
        return $this->belongsToMany(User::class);
    }

    public function getPropertyFile()
    {
        return $this->morphedByMany(Propertie::class);
    }
}
