<?php

declare(strict_types=1);

namespace App\Models;

use App\Events\SubsiteSaved;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $nickname
 * @property string $tagline
 * @property string $subdomain
 * @property string $logo_filename
 * @property string $green_text
 * @property string $white_text
 * @property string $route
 * @property string $view
 * @property bool $has_theme
 */
final class Subsite extends BaseModel
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    // Properties

    protected $fillable = [
        'name',
        'nickname',
        'tagline',
        'subdomain',
        'logo_filename',
        'green_text',
        'white_text',
        'route',
        'view',
        'has_theme',
    ];

    public function sluggable(): array
    {
        return $this->getSlugFrom('name');
    }

    protected $dispatchesEvents = [
        'saved' => SubsiteSaved::class,
    ];
}
