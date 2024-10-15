<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'reff_id',
        'status',
        'customer_email',
        'customer_name',
        'customer_phone',
        'payment_channel',
        'total_harga',
        'total_dibayar',
        'total_diterima',
    ];

    protected static function boot()
    {
        parent::boot();

        // Automatically generate a UUID when creating a new record
        // static::creating(function ($model) {
        //     if (empty($model->uuid)) {
        //         $model->uuid = Uuid::uuid4()->getBytes();
        //     }
        // });
    }

    // Convert the binary UUID to a string when accessing it
    // public function getUuidAttribute($value)
    // {
    //     return Uuid::fromBytes($value)->toString();
    // }

    // Convert the string UUID to binary when setting it
    // public function setUuidAttribute($value)
    // {
    //     $this->attributes['uuid'] = Uuid::fromString($value)->getBytes();
    // }
}