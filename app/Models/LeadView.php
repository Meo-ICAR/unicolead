<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadView extends Model
{
    protected $fillable = [
        'lead_id',
        'ip_address',
        'user_agent',
    ];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
