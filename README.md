# Read Me

MetaFilter is primarily a collection of blog subsites:

- Ask MetaFilter
- Best Of
- FanFare
- IRL
- Jobs
- MetaFilter
- MetaTalk
- Music
- Podcast
- Projects

There are also smaller secondary subsites:

- Chat
- Labs
- Mall

The home page of all the primary blog subsites is handled by <a href="https://github.com/MetaFilter/MetaFilter2024/blob/6ad35f2affec214904856ab3f2c6950663f3d2aa/app/Http/Controllers/PostController.php#L32">the index function of the PostController</a>.
The <a href="https://github.com/MetaFilter/MetaFilter2024/blob/main/app/Providers/AppServiceProvider.php">boot function</a> in AppServiceProvider looks up the subsite from the subdomain in the URL and sets the subsite.
The <a href="https://github.com/MetaFilter/MetaFilter2024/blob/6ad35f2affec214904856ab3f2c6950663f3d2aa/app/Repositories/PostRepository.php">post repository</a> gets the posts for the subsite from the database and the controller passes them to <a href="https://github.com/MetaFilter/MetaFilter2024/blob/6ad35f2affec214904856ab3f2c6950663f3d2aa/resources/views/posts/index.blade.php">the view</a>.

## Contributing

Thank you for considering contributing to MetaFilter2024. The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the MetaFilter coding community is welcoming to all, please review and abide by the [Code of Conduct](https://github.com/MetaFilter/MetaFilter2024?tab=coc-ov-file#readme).

## License

MetaFilter2024 is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
