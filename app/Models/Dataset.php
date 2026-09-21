<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'organization_id',
        'category',
        'format',
        'download_count',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    /**
     * Dataset dimiliki oleh satu Organization
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
