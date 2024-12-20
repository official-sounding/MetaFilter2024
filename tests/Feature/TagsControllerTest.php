<?php

declare(strict_types=1);

use Symfony\Component\HttpFoundation\Response;
use App\Traits\FeatureTestTrait;

test('example', function () {
    $uri = $this->getFullUrlFromSegment('tags');

    $response = $this->get($uri);

    $response->assertStatus(Response::HTTP_OK);
});
