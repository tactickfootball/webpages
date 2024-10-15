<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class Matches extends Model
{
    use HasFactory;

    protected $table = 'matches';

    // Specify the fillable fields
    protected $fillable = ['id', 'name', 'date', 'total_available_ticket', 'description', 'mitra_id', 'club_1_id', 'club_2_id', 'logo']; // Replace with actual fields

    protected $casts = [
        'id' => 'string',
        'mitra_id' => 'string',
        'club_1_id' => 'string',
        'club_2_id' => 'string',
    ];

    // Accessors to convert binary UUIDs to strings
    public function getClub1UuidAttribute($value)
    {
        return Str::uuid($value)->toString();
    }

    public function getClub2UuidAttribute($value)
    {
        return Str::uuid($value)->toString();
    }

    public function getClub1()
    {
        return $this->belongsTo(Club::class, 'club_1_id', 'id');
    }

    public function getClub2()
    {
        return $this->belongsTo(Club::class, 'club_2_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        // Automatically generate a UUID when creating a new record
        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = Uuid::uuid4()->getBytes();
            }
        });
    }

    // Convert the binary UUID to a string when accessing it
    public function getUuidAttribute($value)
    {
        return Uuid::fromBytes($value)->toString();
    }

    // Convert the string UUID to binary when setting it
    public function setUuidAttribute($value)
    {
        $this->attributes['uuid'] = Uuid::fromString($value)->getBytes();
    }
}