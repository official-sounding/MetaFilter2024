<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1;

use App\Enums\StatusEnum;
use App\Http\Requests\Post\StoreMetaFilterPostRequest;
use App\Repositories\PostRepositoryInterface;
use App\Services\PostService;
use Illuminate\Http\JsonResponse;

final class ApiPostController extends BaseApiController
{
    public function __construct(
        protected PostRepositoryInterface $postRepository,
        protected PostService $postService,
    ) {}

    public function store(StoreMetaFilterPostRequest $request): JsonResponse
    {
        $stored = $this->postService->store($request->validated());

        if ($stored) {
            $message = StatusEnum::PostAdded;
            $status = StatusEnum::Success;
        } else {
            $message = StatusEnum::AddingPostFailed;
            $status = StatusEnum::Failure;
        }

        $data = [
            'message' => trans($message),
            'status' => trans($status),
        ];

        return response()->json($data);
    }
}
