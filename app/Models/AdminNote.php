<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $admin_id
 * @property int $notable_id
 * @property string $notable_type
 * @property string $text
 */
final class AdminNote extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'admin_id',
        'notable_id',
        'notable_type',
        'text',
    ];

    // Builders
    /*
        public function newEloquentBuilder($query): ModeratorNoteQueryBuilder
        {
            return new ModeratorNoteQueryBuilder($query);
        }
    */
    // Relationships

    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
