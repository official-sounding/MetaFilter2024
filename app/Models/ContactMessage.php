<?php

declare(strict_types=1);

namespace App\Models;

use App\Builders\ContactMessageQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 */
final class ContactMessage extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Properties

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];

    // Builders

    public function newEloquentBuilder($query): ContactMessageQueryBuilder
    {
        return new ContactMessageQueryBuilder($query);
    }
}
