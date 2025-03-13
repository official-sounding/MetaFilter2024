<?php

declare(strict_types=1);

namespace App\Enums;

enum RouteNameEnum: string
{
    // Auth
    case AdminPanel = 'filament.admin.auth.login';
    case AuthForgotPasswordCreate = 'auth.forgot-password.create';
    case AuthLoginCreate = 'login';
    case AuthLoginStore = 'login.store';
    case AuthLogout = 'logout';

    // Ask MetaFilter My Posts
    case AskMyPostsIndex = 'ask.my-posts.index';
    case AskMyPostsShow = 'ask.my-posts.show';
    case AskMyPostsCreate = 'ask.my-posts.create';
    case AskMyPostsPreview = 'ask.my-posts.preview';
    case AskMyPostsStore = 'ask.my-posts.store';
    case AskMyPostsEdit = 'ask.my-posts.edit';
    case AskMyPostsUpdate = 'ask.my-posts.update';
    case AskMyPostsDelete = 'ask.my-posts.delete';

    // FanFare My Posts
    case FanFareMyPostsIndex = 'fanfare.my-posts.index';
    case FanFareMyPostsShow = 'fanfare.my-posts.show';
    case FanFareMyPostsCreate = 'fanfare.my-posts.create';
    case FanFareMyPostsPreview = 'fanfare.my-posts.preview';
    case FanFareMyPostsStore = 'fanfare.my-posts.store';
    case FanFareMyPostsEdit = 'fanfare.my-posts.edit';
    case FanFareMyPostsUpdate = 'fanfare.my-posts.update';
    case FanFareMyPostsDelete = 'fanfare.my-posts.delete';

    // FAQ
    case FaqIndex = 'faq.index';

    case FavoritesIndex = 'favorites.index';

    // IRL My Posts
    case IrlMyPostsIndex = 'irl.my-posts.index';
    case IrlMyPostsShow = 'irl.my-posts.show';
    case IrlMyPostsCreate = 'irl.my-posts.create';
    case IrlMyPostsPreview = 'irl.my-posts.preview';
    case IrlMyPostsStore = 'irl.my-posts.store';
    case IrlMyPostsEdit = 'irl.my-posts.edit';
    case IrlMyPostsUpdate = 'irl.my-posts.update';
    case IrlMyPostsDelete = 'irl.my-posts.delete';

    // Jobs

    // Jobs My Posts
    case JobsMyPostsIndex = 'jobs.my-posts.index';
    case JobsMyPostsShow = 'jobs.my-posts.show';
    case JobsMyPostsCreate = 'jobs.my-posts.create';
    case JobsMyPostsJobCreate = 'jobs.my-post-job.create';
    case JobsMyPostsAvailabilityCreate = 'jobs.my-post-availability.create';
    case JobsMyPostsPreview = 'jobs.my-posts.preview';
    case JobsMyPostsStore = 'jobs.my-posts.store';
    case JobsMyPostsEdit = 'jobs.my-posts.edit';
    case JobsMyPostsUpdate = 'jobs.my-posts.update';
    case JobsMyPostsDelete = 'jobs.my-posts.delete';

    // Language Switcher
    case LanguageSwitcher = 'language';

    // My MeFi
    case MetaFilterMyMeFiIndex = 'metafilter.my-mefi.index';
    case MetaFilterMyFavoritesIndex = 'metafilter.my-favorites.index';
    case MetaFilterMyCommentsIndex = 'metafilter.my-comments.index';

    // MetaFilter My Posts
    case MetaFilterMyPostsIndex = 'metafilter.my-posts.index';
    case MetaFilterMyPostsShow = 'metafilter.my-posts.show';
    case MetaFilterMyPostsCreate = 'metafilter.my-posts.create';
    case MetaFilterMyPostsPreview = 'metafilter.my-posts.preview';
    case MetaFilterMyPostsStore = 'metafilter.my-posts.store';
    case MetaFilterMyPostsEdit = 'metafilter.my-posts.edit';
    case MetaFilterMyPostsUpdate = 'metafilter.my-posts.update';
    case MetaFilterMyPostsDelete = 'metafilter.my-posts.delete';

    // Jobs
    case MetaTalkMyFavoritesIndex = 'metatalk.my-favorites.index';
    case MetaTalkRecentCommentsIndex = 'metatalk.recent-comments.index';

    // MetaTalk My Posts
    case MetaTalkMyPostsIndex = 'metatalk.my-posts.index';
    case MetaTalkMyPostsShow = 'metatalk.my-posts.show';
    case MetaTalkMyPostsCreate = 'metatalk.my-posts.create';
    case MetaTalkMyPostsPreview = 'metatalk.my-posts.preview';
    case MetaTalkMyPostsStore = 'metatalk.my-posts.store';
    case MetaTalkMyPostsEdit = 'metatalk.my-posts.edit';
    case MetaTalkMyPostsUpdate = 'metatalk.my-posts.update';
    case MetaTalkMyPostsDelete = 'metatalk.my-posts.delete';

    // Music My Posts
    case MusicMyPostsIndex = 'music.my-posts.index';
    case MusicMyPostsShow = 'music.my-posts.show';
    case MusicMyPostsCreate = 'music.my-posts-create';
    case MusicMyPostsSongCreate = 'music.my-posts-song.create';
    case MusicMyPostsTalkCreate = 'music.my-posts-talk.create';
    case MusicMyPostsPreview = 'music.my-posts.preview';
    case MusicMyPostsStore = 'music.my-posts.store';
    case MusicMyPostsEdit = 'music.my-posts.edit';
    case MusicMyPostsUpdate = 'music.my-posts.update';
    case MusicMyPostsDelete = 'music.my-posts.delete';

    // Podcast My Posts
    case PodcastMyPostsIndex = 'podcast.my-posts.index';
    case PodcastMyPostsShow = 'podcast.my-posts.show';
    case PodcastMyPostsCreate = 'podcast.my-posts.create';
    case PodcastMyPostsPreview = 'podcast.my-posts.preview';
    case PodcastMyPostsStore = 'podcast.my-posts.store';
    case PodcastMyPostsEdit = 'podcast.my-posts.edit';
    case PodcastMyPostsUpdate = 'podcast.my-posts.update';
    case PodcastMyPostsDelete = 'podcast.my-posts.delete';

    // Projects My Posts
    case ProjectsMyPostsIndex = 'projects.my-posts.index';
    case ProjectsMyPostsShow = 'projects.my-posts.show';
    case ProjectsMyPostsCreate = 'projects.my-posts.create';
    case ProjectsMyPostsPreview = 'projects.my-posts.preview';
    case ProjectsMyPostsStore = 'projects.my-posts.store';
    case ProjectsMyPostsEdit = 'projects.my-posts.edit';
    case ProjectsMyPostsUpdate = 'projects.my-posts.update';
    case ProjectsMyPostsDelete = 'projects.my-posts.delete';
}
