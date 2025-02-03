<?php

declare(strict_types=1);

namespace App\Enums;

enum RouteNameEnum: string
{
    // Auth
    case AdminPanel = 'filament.admin.auth.login';
    case AuthConfirmPasswordShow = 'auth.confirm-password.show';
    case AuthConfirmPasswordStore = 'auth.confirm-password.store';
    case AuthForgotPasswordCreate = 'forgot-password';
    case AuthLoginCreate = 'login';
    case AuthLoginStore = 'login.store';
    case AuthLogout = 'logout';
    case AuthResetPasswordCreate = 'auth.reset-password.create';
    case AuthResetPasswordStore = 'auth.reset-password.store';
    case AuthResetPassword = 'auth.password.update';

    case AboutMetaFilter = 'about.metafilter';

    // Ask
    case AskPopularFavoritesIndex = 'ask.popular-favorites.index';
    case AskPopularPostIndex = 'ask.post.popular.index';
    case AskRandomPostShow = 'ask.random.show';

    case AskPostIndex = 'ask.post.index';
    case AskPostShow = 'ask.post.show';

    // Ask MetaFilter My Posts
    case AskMyPostsIndex = 'ask.my-posts.index';
    case AskMyPostsShow = 'ask.my-posts.show';
    case AskMyPostsCreate = 'ask.my-posts.create';
    case AskMyPostsStore = 'ask.my-posts.store';
    case AskMyPostsEdit = 'ask.my-posts.edit';
    case AskMyPostsUpdate = 'ask.my-posts.update';
    case AskMyPostsDelete = 'ask.my-posts.delete';


    // Best Of
    case BestOfHomeIndex = 'bestof.home.index';
    case BestOfPostShow = 'bestof.post.show';

    // Bugs
    case BugsIndex = 'bugs.index';
    case BugsCreate = 'bugs.create';

    // Chat
    case ChatHomeIndex = 'chat.home.index';

    // Contact Message
    case ContactMessageCreate = 'contact.create';
    case ContactMessageStore = 'contact.store';

    // Contacts
    case ContactsIndex = 'contacts.index';

    // FanFare
    case FanFarePopularFavoritesIndex = 'fanfare.popular-favorites.index';
    case FanfarePostIndex = 'fanfare.post.index';
    case FanFarePostShow = 'fanfare.post.show';

    // FanFare My Posts
    case FanFareMyPostsIndex = 'fanfare.my-posts.index';
    case FanFareMyPostsShow = 'fanfare.my-posts.show';
    case FanFareMyPostsCreate = 'fanfare.my-posts.create';
    case FanFareMyPostsStore = 'fanfare.my-posts.store';
    case FanFareMyPostsEdit = 'fanfare.my-posts.edit';
    case FanFareMyPostsUpdate = 'fanfare.my-posts.update';
    case FanFareMyPostsDelete = 'fanfare.my-posts.delete';

    // FAQ
    case FaqIndex = 'faq.index';

    case FavoritesIndex = 'favorites.index';

    // IRL
    case IrlPostIndex = 'irl.post.index';
    case IrlPostShow = 'irl.post.show';

    // IRL My Posts
    case IrlMyPostsIndex = 'irl.my-posts.index';
    case IrlMyPostsShow = 'irl.my-posts.show';
    case IrlMyPostsCreate = 'irl.my-posts.create';
    case IrlMyPostsStore = 'irl.my-posts.store';
    case IrlMyPostsEdit = 'irl.my-posts.edit';
    case IrlMyPostsUpdate = 'irl.my-posts.update';
    case IrlMyPostsDelete = 'irl.my-posts.delete';

    // Jobs
    case JobsPostIndex = 'jobs.post.index';
    case JobsPostShow = 'jobs.post.show';

    // Jobs My Posts
    case JobsMyPostsIndex = 'jobs.my-posts.index';
    case JobsMyPostsShow = 'jobs.my-posts.show';
    case JobsMyPostsJobCreate = 'jobs.my-post-job.create';
    case JobsMyPostsAvailabilityCreate = 'jobs.my-post-availability.create';
    case JobsMyPostsStore = 'jobs.my-posts.store';
    case JobsMyPostsEdit = 'jobs.my-posts.edit';
    case JobsMyPostsUpdate = 'jobs.my-posts.update';
    case JobsMyPostsDelete = 'jobs.my-posts.delete';

    // Labs
    case LabsHomeIndex = 'labs.home.index';

    // Language Switcher
    case LanguageSwitcher = 'language';

    // Mall
    case MallHomeIndex = 'mall.home.index';

    // MeFi Mail
    case MeFiMailIndex = 'mefi.mail.index';
    case MeFiMailCreate = 'mefi.mail.create';
    case MeFiMailShow = 'mefi.mail.show';

    // Members
    case MemberIndex = 'members.index';
    case MemberShow = 'members.show';
    case MemberCreate = 'members.create';
    case MemberStore = 'members.store';
    case MemberEdit = 'members.edit';
    case MemberUpdate = 'members.update';
    case MemberDelete = 'members.delete';

    // MetaFilter
    case MetaFilterArchivesIndex = 'metafilter.archives.index';
    // Funding
    case MetaFilterFundingIndex = 'metafilter.funding.index';
    case MetaFilterPopularPostIndex = 'metafilter.post.popular.index';
    case MetaFilterPopularFavoritesIndex = 'metafilter.popular-favorites.index';
    case MetaFilterPostIndex = 'metafilter.post.index';
    case MetaFilterPostShow = 'metafilter.post.show';
    case MetaFilterRandomPostShow = 'metafilter.random.show';
    case RecentActivityShow = 'metafilter.recent-activity.show';

    // MetaFilter My Posts
    case MetaFilterMyPostsIndex = 'metafilter.my-posts.index';
    case MetaFilterMyPostsShow = 'metafilter.my-posts.show';
    case MetaFilterMyPostsCreate = 'metafilter.my-posts.create';
    case MetaFilterMyPostsStore = 'metafilter.my-posts.store';
    case MetaFilterMyPostsEdit = 'metafilter.my-posts.edit';
    case MetaFilterMyPostsUpdate = 'metafilter.my-posts.update';
    case MetaFilterMyPostsDelete = 'metafilter.my-posts.delete';

    // Jobs
    case MetaTalkPostIndex = 'metatalk.post.index';
    case MetaTalkPostShow = 'metatalk.post.show';

    // MetaTalk My Posts
    case MetaTalkMyPostsIndex = 'metatalk.my-posts.index';
    case MetaTalkMyPostsShow = 'metatalk.my-posts.show';
    case MetaTalkMyPostsCreate = 'metatalk.my-posts.create';
    case MetaTalkMyPostsStore = 'metatalk.my-posts.store';
    case MetaTalkMyPostsEdit = 'metatalk.my-posts.edit';
    case MetaTalkMyPostsUpdate = 'metatalk.my-posts.update';
    case MetaTalkMyPostsDelete = 'metatalk.my-posts.delete';

    // Music
    case MusicPopularPostIndex = 'music.post.popular.index';
    case MusicPopularFavoritesIndex = 'music.popular-favorites.index';
    case MusicPostIndex = 'music.post.index';
    case MusicPostShow = 'music.post.show';

    // Music My Posts
    case MusicMyPostsIndex = 'music.my-posts.index';
    case MusicMyPostsShow = 'music.my-posts.show';
    case MusicMyPostsSongCreate = 'music.my-post-song.create';
    case MusicMyPostsTalkCreate = 'music.my-post-talk.create';
    case MusicMyPostsStore = 'music.my-posts.store';
    case MusicMyPostsEdit = 'music.my-posts.edit';
    case MusicMyPostsUpdate = 'music.my-posts.update';
    case MusicMyPostsDelete = 'music.my-posts.delete';

    // My MeFi
    case MyMeFiIndex = 'metafilter.my.index';
    case MyMeFiComments = 'metafilter.my.comments';
    case MyMeFiFavorites = 'metafilter.my.favorites';

    // Podcast
    case PodcastPostIndex = 'podcast.post.index';
    case PodcastPostShow = 'podcast.post.show';

    // Podcast My Posts
    case PodcastMyPostsIndex = 'podcast.my-posts.index';
    case PodcastMyPostsShow = 'podcast.my-posts.show';
    case PodcastMyPostsCreate = 'podcast.my-posts.create';
    case PodcastMyPostsStore = 'podcast.my-posts.store';
    case PodcastMyPostsEdit = 'podcast.my-posts.edit';
    case PodcastMyPostsUpdate = 'podcast.my-posts.update';
    case PodcastMyPostsDelete = 'podcast.my-posts.delete';

    // Preferences
    case PreferencesEdit = 'preferences.edit';

    // Projects
    case ProjectsPopularPostIndex = 'projects.post.popular.index';
    case ProjectsPostIndex = 'projects.post.index';
    case ProjectsPostShow = 'projects.post.show';

    // Projects My Posts
    case ProjectsMyPostsIndex = 'projects.my-posts.index';
    case ProjectsMyPostsShow = 'projects.my-posts.show';
    case ProjectsMyPostsCreate = 'projects.my-posts.create';
    case ProjectsMyPostsStore = 'projects.my-posts.store';
    case ProjectsMyPostsEdit = 'projects.my-posts.edit';
    case ProjectsMyPostsUpdate = 'projects.my-posts.update';
    case ProjectsMyPostsDelete = 'projects.my-posts.delete';

    // Search
    case SearchCreate = 'search.create';
    case SearchShow = 'search.show';

    // Signup
    case SignupCreate = 'signup';
    case SignupThanks = 'signup.thanks';
    case SignupWizard = 'signup.wizard';
    case AuthVerifyEmail = 'auth.verify-email';

    // Tags
    case TagsIndex = 'metafilter.tags.index';
}
