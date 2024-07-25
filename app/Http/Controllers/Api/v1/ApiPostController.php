<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1;

use App\Enums\StatusEnum;
use App\Http\Requests\Post\StorePostRequest;
use App\Repositories\PostRepositoryInterface;
use App\Services\PostService;
use Illuminate\Http\JsonResponse;

final class ApiPostController extends BaseApiController
{
    public function __construct(
        protected PostRepositoryInterface $postRepository,
        protected PostService $postService,
    ) {}

    public function store(StorePostRequest $request): JsonResponse
    {
        $stored = $this->postService->store($request->validated());

        if ($stored) {
            $message = StatusEnum::POST_ADDED->value;
            $status = StatusEnum::SUCCESS->value;
        } else {
            $message = StatusEnum::POST_ADDING_FAILED->value;
            $status = StatusEnum::FAILURE->value;
        }

        $data = [
            'message' => $message,
            'status' => $status,
        ];

        return response()->json($data);
    }
}
