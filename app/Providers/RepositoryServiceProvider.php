<?php

declare(strict_types=1);

namespace App\Providers;

use App\Repositories\BannerLinkRepository;
use App\Repositories\BannerLinkRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\CommentRepository;
use App\Repositories\CommentRepositoryInterface;
use App\Repositories\ContactMessageRepository;
use App\Repositories\ContactMessageRepositoryInterface;
use App\Repositories\FaqRepository;
use App\Repositories\FaqRepositoryInterface;
use App\Repositories\FavoriteRepository;
use App\Repositories\FavoriteRepositoryInterface;
use App\Repositories\FlagReasonRepository;
use App\Repositories\FlagReasonRepositoryInterface;
use App\Repositories\FlagRepository;
use App\Repositories\FlagRepositoryInterface;
use App\Repositories\MeFiMailRepository;
use App\Repositories\MeFiMailRepositoryInterface;
use App\Repositories\ModeratorNoteRepository;
use App\Repositories\ModeratorNoteRepositoryInterface;
use App\Repositories\SimplePageRepository;
use App\Repositories\SimplePageRepositoryInterface;
use App\Repositories\PostRepository;
use App\Repositories\PostRepositoryInterface;
use App\Repositories\SnippetRepository;
use App\Repositories\SnippetRepositoryInterface;
use App\Repositories\SubsiteRepository;
use App\Repositories\SubsiteRepositoryInterface;
use App\Repositories\TagRepository;
use App\Repositories\TagRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

final class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $repositories = [
            BannerLinkRepositoryInterface::class => BannerLinkRepository::class,
            CategoryRepositoryInterface::class => CategoryRepository::class,
            CommentRepositoryInterface::class => CommentRepository::class,
            ContactMessageRepositoryInterface::class => ContactMessageRepository::class,
            FaqRepositoryInterface::class => FaqRepository::class,
            FavoriteRepositoryInterface::class => FavoriteRepository::class,
            FlagReasonRepositoryInterface::class => FlagReasonRepository::class,
            FlagRepositoryInterface::class => FlagRepository::class,
            MeFiMailRepositoryInterface::class => MeFiMailRepository::class,
            ModeratorNoteRepositoryInterface::class => ModeratorNoteRepository::class,
            SimplePageRepositoryInterface::class => SimplePageRepository::class,
            SnippetRepositoryInterface::class => SnippetRepository::class,
            PostRepositoryInterface::class => PostRepository::class,
            SubsiteRepositoryInterface::class => SubsiteRepository::class,
            TagRepositoryInterface::class => TagRepository::class,
            UserRepositoryInterface::class => UserRepository::class,
        ];

        foreach ($repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
