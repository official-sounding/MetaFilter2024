<?php

declare(strict_types=1);

namespace App\Traits;
use App\Dtos\LocationDto;

trait LocationTrait {
    public function getRandomizedLocation(string $latitude, string $longitude): LocationDto
    {
        $angle = rand() * 2 * pi();

        // TODO: Figure out randomization
        $newLatitude = $latitude + (r * sin($angle));
        $newLongitude = $longitude + (r * sin($angle));

        return new LocationDto(
            latitude: $newLatitude,
            longitude: $newLongitude
        );
    }
}
