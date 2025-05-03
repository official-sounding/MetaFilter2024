<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $subject
 * @property string $message
 * @property int $sender_id
 * @property int $recipient_id
 */
final class MeFiMail extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    // Properties

    protected $table = 'mefi_mails';

    protected $fillable = [
        'subject',
        'message',
        'sender_id',
        'recipient_id',
    ];

    // Builders
    /*
        public function newEloquentBuilder($query): MeFiMailQueryBuilder
        {
            return new MeFiMailQueryBuilder($query);
        }
    */
    // Relationships

    public function sender(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }

    public function recipient(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }
}
