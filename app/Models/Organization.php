<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'logo',
        'website',
    ];

    /**
     * Organization memiliki banyak Dataset
     */
    public function datasets()
    {
        return $this->hasMany(Dataset::class);
    }
}
