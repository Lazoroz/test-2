<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mentor extends Model
{
    use HasFactory;

    protected $table = 'mentors';

    protected $fillable = [
        'voornaam',
        'email',
        'klas',
    ];

    public function user(): BelongsTo

    {

        return $this->belongsTo(User::class);

    }
}
