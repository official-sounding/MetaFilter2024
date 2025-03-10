<?php

declare(strict_types=1);

namespace App\Models;

use App\Builders\BannerLinkQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

/**
 * @property int $id
 * @property int $sort_order
 * @property string $title
 * @property string $url
 */
final class BannerLink extends BaseModel implements Sortable
{
    use HasFactory;
    use SoftDeletes;
    use SortableTrait;

    // Properties

    protected $fillable = [
        'sort_order',
        'title',
        'url',
    ];

    public array $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
    ];

    // Builders
    /*
        public function newEloquentBuilder($query): BannerLinkQueryBuilder
        {
            return new BannerLinkQueryBuilder($query);
        }*/
}
