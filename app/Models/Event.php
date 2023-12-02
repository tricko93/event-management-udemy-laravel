<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    /**
     * Add a foreign key in the event table to reference the ID in the
     * users table.
     * 
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Add a foreign key in the event table to reference the ID in the
     * attendees table.
     * 
     * @return HasMany
     */
    public function attendees(): HasMany
    {
        return $this->hasMany(Attendee::class);
    }
}
