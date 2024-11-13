<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Letter extends Model
{
    use HasFactory;

    // load the relationships when letters are loaded
    // protected $with = ['sender', 'recipient'];

    /**
     * Get the user that owns the phone.
     */
    public function recipient(): BelongsTo
    {
        return $this->belongsTo(Recipient::class, 'recipient_id');
    }

    /**
     * Get the user that owns the phone.
     */
    public function sender(): BelongsTo
    {
        return $this->belongsTo(Sender::class, 'sender_id');
    }
}
