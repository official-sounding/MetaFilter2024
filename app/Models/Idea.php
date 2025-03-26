<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Overtrue\LaravelVote\Traits\Votable;

final class Idea extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Votable;
}
