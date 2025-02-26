<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $user_id
 * @property string $text
 * @property string $credential_id
 * @property string $data
 */
final class Passkey extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Properties

    protected $fillable = [
        'user_id',
        'text',
        'credential_id',
        'data',
    ];

    // Relationships

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
