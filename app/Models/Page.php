<?php

declare(strict_types=1);

namespace App\Models;

use App\Traits\SearchTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $body
 */
final class Page extends BaseModel
{
    use HasFactory;
    use SearchTrait;
    use Sluggable;
    use SoftDeletes;

    // Properties

    protected $fillable = [
        'title',
        'slug',
        'body',
    ];

    protected array $searchable = [
        'title',
        'body',
    ];

    public function sluggable(): array
    {
        return $this->getSlugFrom('title');
    }
}
