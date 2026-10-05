<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'email',
        'name',
        'studio',
        'token',
        'opened_at',
        'reminder_7d_sent_at',
        'reminder_14d_sent_at',
        'views_count',
    ];

    protected $casts = [
        'opened_at' => 'datetime',
        'reminder_7d_sent_at' => 'datetime',
        'reminder_14d_sent_at' => 'datetime',
    ];

    public function views()
    {
        return $this->hasMany(LeadView::class);
    }

    public function latestView()
    {
        return $this->hasOne(LeadView::class)->latestOfMany();
    }
}
