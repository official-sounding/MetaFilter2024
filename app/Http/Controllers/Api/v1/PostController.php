<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1;

use App\Dtos\PostDto;
use App\Enums\PostStateEnum;
use App\Http\Requests\Post\StorePostRequest;
use App\Services\PostService;
use App\Traits\SubsiteTrait;
use Illuminate\Http\JsonResponse;

final class PostController extends BaseApiController
{
    use SubsiteTrait;

    public function __construct(protected PostService $postService) {}

    public function store(StorePostRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $subsiteId = $this->getSubsiteId();

        $dto = new PostDto(
            title: $validated['title'],
            body: $validated['content'],
            more_inside: $validated['more_inside'],
            user_id: $validated['user_id'],
            subsite_id: $subsiteId,
            state: PostStateEnum::Published->value,
            published_at: now()->toDateTimeString(),
            is_published: true,
        );

        $post = $this->postService->store($dto);

        $message = 'Post created';

        // TODO: Get the post URL
        $postUrl = '';

        $data = [
            'post_url' => $postUrl,
        ];

        return $this->sendResponse($message, $data);
    }
}
