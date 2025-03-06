<?php

declare(strict_types=1);

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

/**
 * @property int $id
 * @property string $question
 * @property string $slug
 * @property string $answer
 * @property int $legacy_id
 * @property int $subsite_id
 */
final class Faq extends BaseModel
{
    use HasFactory;
    use Searchable;
    use Sluggable;

    // Properties

    protected $fillable = [
        'question',
        'answer',
        'legacy_id',
        'subsite_id',
    ];

    public function sluggable(): array
    {
        return $this->getSlugFrom('question');
    }

    public function toSearchableArray(): array
    {
        return ['id' => (string) $this->id] + $this->toArray();
    }

    // Builders
    /*
        public function newEloquentBuilder($query): FaqQueryBuilder
        {
            return new FaqQueryBuilder($query);
        }*/
}
