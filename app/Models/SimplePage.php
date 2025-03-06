<?php

declare(strict_types=1);

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property ?string $image_url
 * @property string $content
 * @property bool $is_public
 * @property bool $indexable
 * @property bool $register_outside_filament
 * @property ?string $layout
 * @property ?string $extends
 * @property ?string $section
 */
final class SimplePage extends BaseModel
{
    use HasFactory;
    use Searchable;
    use Sluggable;
    use SoftDeletes;

    protected $table = 'filament_simple_pages';

    // Properties

    protected $fillable = [
        'title',
        'slug',
        'image_url',
        'content',
        'is_public',
        'indexable',
        'register_outside_filament',
        'layout',
        'extends',
        'section',
    ];

    protected array $searchable = [
        'title',
        'content',
    ];

    public function sluggable(): array
    {
        return $this->getSlugFrom('title');
    }

    public function toSearchableArray(): array
    {
        return ['id' => (string) $this->id] + $this->toArray();
    }
}
