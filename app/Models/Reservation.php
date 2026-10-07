<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_code',
        'phone',
        'people_count',
        'reservation_date',
        'reservation_time',
        'comment',
        'status',
    ];

    protected $casts = [
        'people_count' => 'integer',
        'reservation_date' => 'date',
    ];

    public const STATUSES = ['baru', 'diproses', 'selesai', 'dibatalkan'];

    public function getFullNameAttribute(): string
    {
        return trim($this->first_name.' '.$this->last_name);
    }
}
