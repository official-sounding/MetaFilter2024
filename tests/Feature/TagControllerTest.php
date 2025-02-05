<?php

declare(strict_types=1);

use Symfony\Component\HttpFoundation\Response;

test('example', function () {
    $this->markTestSkipped();
    $response = $this->get('tags');

    $response->assertStatus(Response::HTTP_OK);
});
