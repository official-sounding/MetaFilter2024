<?php

declare(strict_types=1);

namespace App\Enums;

enum RouteNameEnum: string
{
    // Auth
    case AUTH_LOGIN_CREATE = 'auth.login.create';
    case AUTH_LOGIN_STORE = 'auth.login.store';
    case AUTH_LOGOUT = 'auth.logout';
    case AUTH_FORGOT_PASSWORD_CREATE = 'auth.forgot-password.create';
    case AUTH_FORGOT_PASSWORD_STORE = 'auth.forgot-password.store';
    case AUTH_RESET_PASSWORD_CREATE = 'auth.reset-password.create';
    case AUTH_RESET_PASSWORD_STORE = 'auth.reset-password.store';
    case AUTH_RESET_PASSWORD = 'auth.password.update';
    case AUTH_REGISTER_CREATE = 'auth.register.create';
    case AUTH_REGISTER_STORE = 'auth.register.store';
    case AUTH_VERIFY_EMAIL = 'auth.verify-email';

    case ABOUT_INDEX = 'metafilter.about.index';

    case ASK_POPULAR_FAVORITES_INDEX = 'ask.popular-favorites.index';
    case ASK_POPULAR_POST_INDEX = 'ask.post.popular.index';
    case ASK_RANDOM_POST_SHOW = 'ask.random.show';

    case ASK_POST_INDEX = 'ask.post.index';
    case ASK_POST_SHOW = 'ask.post.show';
    case ASK_POST_CREATE = 'ask.post.create';
    case ASK_POST_STORE = 'ask.post.store';
    case ASK_POST_EDIT = 'ask.post.edit';
    case ASK_POST_UPDATE = 'ask.post.update';
    case ASK_POST_DELETE = 'ask.post.delete';

    case BEST_OF_HOME_INDEX = 'bestof.home.index';

    case METACHAT_HOME_INDEX = 'chat.home.index';

    case COMMENT_STORE = 'comment.store';
    case COMMENT_EDIT = 'comment.edit';
    case COMMENT_UPDATE = 'comment.update';
    case COMMENT_DELETE = 'comment.delete';

    case CONTACT_CREATE = 'contact.create';
    case CONTACT_STORE = 'contact.store';

    case CONTACTS_INDEX = 'contacts.index';

    case FANFARE_POPULAR_FAVORITES_INDEX = 'fanfare.popular-favorites.index';
    case FANFARE_POST_INDEX = 'fanfare.post.index';
    case FANFARE_POST_SHOW = 'fanfare.post.show';
    case FANFARE_POST_CREATE = 'fanfare.post.create';
    case FANFARE_POST_STORE = 'fanfare.post.store';
    case FANFARE_POST_EDIT = 'fanfare.post.edit';
    case FANFARE_POST_UPDATE = 'fanfare.post.update';
    case FANFARE_POST_DELETE = 'fanfare.post.delete';

    case FAQ_INDEX = 'faq.index';

    case FAVORITES_INDEX = 'favorites.index';

    case METAFILTER_FUNDING_INDEX = 'metafilter.funding.index';

    case IRL_POST_INDEX = 'irl.post.index';
    case IRL_POST_SHOW = 'irl.post.show';
    case IRL_POST_CREATE = 'irl.post.create';
    case IRL_POST_STORE = 'irl.post.store';
    case IRL_POST_EDIT = 'irl.post.edit';
    case IRL_POST_UPDATE = 'irl.post.update';
    case IRL_POST_DELETE = 'irl.post.delete';

    case JOBS_POST_INDEX = 'jobs.post.index';
    case JOBS_POST_SHOW = 'jobs.post.show';
    case JOBS_POST_CREATE = 'jobs.post.create';
    case JOBS_POST_STORE = 'jobs.post.store';
    case JOBS_POST_EDIT = 'jobs.post.edit';
    case JOBS_POST_UPDATE = 'jobs.post.update';
    case JOBS_POST_DELETE = 'jobs.post.delete';

    case LABS_HOME_INDEX = 'labs.home.index';

    case LANGUAGE_SWITCHER = 'language-switcher';

    case MAIL_INDEX = 'metafilter.mail.index';

    case MALL_HOME_INDEX = 'mall.home.index';

    case METAFILTER_COMMENT_INDEX = 'metafilter.comment.index';
    case METAFILTER_POST_INDEX = 'metafilter.post.index';
    case METAFILTER_POPULAR_POST_INDEX = 'metafilter.post.popular.index';
    case METAFILTER_POPULAR_FAVORITES_INDEX = 'metafilter.popular-favorites.index';
    case METAFILTER_RANDOM_POST_SHOW = 'metafilter.random.show';

    case METAFILTER_POST_SHOW = 'metafilter.post.show';
    case METAFILTER_POST_CREATE = 'metafilter.post.create';
    case METAFILTER_POST_STORE = 'metafilter.post.store';
    case METAFILTER_POST_EDIT = 'metafilter.post.edit';
    case METAFILTER_POST_UPDATE = 'metafilter.post.update';
    case METAFILTER_POST_DELETE = 'metafilter.post.delete';

    case METATALK_POPULAR_POST_INDEX = 'metatalk.post.popular.index';
    case METATALK_POPULAR_FAVORITES_INDEX = 'metatalk.popular-favorites.index';
    case METATALK_POST_INDEX = 'metatalk.post.index';
    case METATALK_POST_SHOW = 'metatalk.post.show';
    case METATALK_POST_CREATE = 'metatalk.post.create';
    case METATALK_POST_STORE = 'metatalk.post.store';
    case METATALK_POST_EDIT = 'metatalk.post.edit';
    case METATALK_POST_UPDATE = 'metatalk.post.update';
    case METATALK_POST_DELETE = 'metatalk.post.delete';

    case MUSIC_POPULAR_POST_INDEX = 'music.post.popular.index';
    case MUSIC_POPULAR_FAVORITES_INDEX = 'music.popular-favorites.index';
    case MUSIC_POST_INDEX = 'music.post.index';
    case MUSIC_POST_SHOW = 'music.post.show';
    case MUSIC_POST_CREATE = 'music.post.create';
    case MUSIC_POST_STORE = 'music.post.store';
    case MUSIC_POST_EDIT = 'music.post.edit';
    case MUSIC_POST_UPDATE = 'music.post.update';
    case MUSIC_POST_DELETE = 'music.post.delete';

    case MY_MEFI_COMMENTS = 'metafilter.my.comments';
    case MY_MEFI_FAVORITES = 'metafilter.my.favorites';
    case MY_MEFI_INDEX = 'metafilter.my.index';

    case PODCAST_POST_INDEX = 'podcast.post.index';
    case PODCAST_POST_SHOW = 'podcast.post.show';
    case PODCAST_POST_CREATE = 'podcast.post.create';
    case PODCAST_POST_STORE = 'podcast.post.store';
    case PODCAST_POST_EDIT = 'podcast.post.edit';
    case PODCAST_POST_UPDATE = 'podcast.post.update';
    case PODCAST_POST_DELETE = 'podcast.post.delete';

    case POST_ARCHIVES_INDEX = 'post.archives.index';

    case PREFERENCES_EDIT = 'preferences.edit';

    case PROFILE_INDEX = 'profile.index';
    case PROFILE_SHOW = 'profile.show';
    case PROFILE_CREATE = 'profile.create';
    case PROFILE_STORE = 'profile.store';
    case PROFILE_EDIT = 'profile.edit';
    case PROFILE_UPDATE = 'profile.update';
    case PROFILE_DELETE = 'profile.delete';

    case PROJECTS_POPULAR_POST_INDEX = 'projects.post.popular.index';
    case PROJECTS_POST_INDEX = 'projects.post.index';
    case PROJECTS_POST_SHOW = 'projects.post.show';
    case PROJECTS_POST_CREATE = 'projects.post.create';
    case PROJECTS_POST_STORE = 'projects.post.store';
    case PROJECTS_POST_EDIT = 'projects.post.edit';
    case PROJECTS_POST_UPDATE = 'projects.post.update';
    case PROJECTS_POST_DELETE = 'projects.post.delete';

    case SEARCH_CREATE = 'search.create';

    case TAGS_INDEX = 'metafilter.tags.index';
}
