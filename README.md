
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

The <a href="https://github.com/MetaFilter/MetaFilter2024/blob/main/app/Providers/AppServiceProvider.php">boot function</a> in AppServiceProvider looks up the subsite from the subdomain in the URL and sets the subsite.

The home page of all the primary blog sites is handled by the index function of the PostController. The post controller gets the posts for the subsite from the database and passes them to the view.

## Contributing

Thank you for considering contributing to MetaFilter2024. The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## License

MetaFilter2024 is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
