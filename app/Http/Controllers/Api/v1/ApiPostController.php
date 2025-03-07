<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1;

use App\Dtos\PostDto;
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
        $validated = $request->validated();

        $postDto = new PostDto(
            title: $validated['title'],
            body: $validated['body'],
            more_inside: $validated['more_inside'] ?? null,
            user_id: (int) $validated['user_id'],
            subsite_id: (int) $validated['subsite_id'],
            state: $validated['state'],
            published_at: $validated['published_at'] ?? null,
            is_published: (bool) ($validated['is_published'] ?? false),
        );

        $stored = $this->postService->store($postDto);

        if ($stored) {
            $message = StatusEnum::PostAdded->value;
            $status = StatusEnum::Success->value;
        } else {
            $message = StatusEnum::AddingPostFailed->value;
            $status = StatusEnum::Failure->value;
        }

        $data = [
            'message' => trans($message),
            'status' => trans($status),
        ];

        return response()->json($data);
    }
}
