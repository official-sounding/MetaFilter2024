<?php

declare(strict_types=1);

namespace App\Models;

use App\Builders\FlagQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $reason
 * @property string $note
 */
final class FlagReason extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    // Properties

    protected $fillable = [
        'reason',
        'note',
    ];

    // Builders

    public function newEloquentBuilder($query): FlagQueryBuilder
    {
        return new FlagQueryBuilder($query);
    }
}
