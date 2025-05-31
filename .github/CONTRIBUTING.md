# Contributing to MetaFilter

## Submitting Changes

To submit changes to the repository, open a Pull Request. In the body of the pull request, add a clear description of what your changes do. Please try to keep Pull Requests as tightly scoped as possible, and keep individual commits atomic (one feature/fix per commit, that can be applied to the codebase independently)

All PRs from contributors must affirm the [Developer Certificate of Origin](../DEVELOPER_CERTIFICATE_OF_ORIGIN.txt) by checking the box on the PR template (or otherwise including an affirmation). This allows contributors to apply changes to the project while ensuring that relevant open source licenses are followed.

## Coding Conventions

### PHP

PHP is coded to [PSR-12: Extended Coding Style](https://www.php-fig.org/psr/psr-12/). Files use `declare(strict_types=1);` to ensure [strict mode](https://backendtea.com/post/php-declare-strict-types/).

[Laravel Pint](https://laravel.com/docs/12.x/pint) is the code style fixer. Run `php artisan pint` to automatically apply the code styles (defined in [pint.json](../pint.json)).

## See Also

[MetaFilter Developer Documentation](https://docs.google.com/document/d/1LGyWgPZOwEBDG-qUjCbbH8vndAVpEOE-_GJZDXSTqu0/edit?tab=t.0) on Google Docs
