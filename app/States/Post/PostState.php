<?php

declare(strict_types=1);

namespace App\States\Post;

use App\States\User\Pending;
use Spatie\ModelStates\Exceptions\InvalidConfig;
use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;

abstract class PostState extends State
{
    /**
     * @throws InvalidConfig
     */
    public static function config(): StateConfig
    {
        return parent::config()
            ->default(Pending::class)
            ->allowTransition(Pending::class, Draft::class)
            ->allowTransition(Pending::class, Published::class)
            ->allowTransition(Draft::class, Published::class);
    }
}
