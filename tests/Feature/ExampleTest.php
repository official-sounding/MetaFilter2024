<?php

declare(strict_types=1);

use Symfony\Component\HttpFoundation\Response;

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(Response::HTTP_OK);
});
