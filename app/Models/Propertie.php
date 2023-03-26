<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Propertie extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $casts = [
        'amenitiesList' => 'array',
        'amenitiesNearby' => 'array',
        'location' => 'array',
        'availabilities' => 'array',
        'paymentPlane' => 'array',
        'agants' => 'array'
    ];

    public function getFile()
    {
        return $this->morphToMany(File::class, 'owner_id');
    }
}
