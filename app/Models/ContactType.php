<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $type
 * @property string $slug
 */
final class ContactType extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Properties

    protected $fillable = [
        'type',
        'slug',
    ];
}
