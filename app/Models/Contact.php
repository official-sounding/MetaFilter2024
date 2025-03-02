<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $user_id
 * @property string $contact_type_id
 */
final class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Properties

    protected $fillable = [
        'user_id',
        'contact_type_id',
    ];
}
