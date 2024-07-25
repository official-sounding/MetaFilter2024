<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreCommentRequest;
use App\Http\Requests\Post\UpdateCommentRequest;
use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Contracts\View\View;

final class CommentController extends BaseController
{
    public function __construct(
        protected CommentService $commentService,
    ) {
        parent::__construct();
    }

    public function store(StoreCommentRequest $request): void
    {
        //
    }

    public function edit(Comment $comment): View
    {
        return view('comments.edit', compact($comment));
    }

    public function update(UpdateCommentRequest $request, Comment $comment): void
    {
        //
    }

    public function delete(Comment $comment): void
    {
        //
    }
}
