## PHP Coding Standards

PHP is coded to <a href="https://www.php-fig.org/per/coding-style/">PER Coding Style 2.0</a>. You can run <code>php artisan pint</code> to reformat all the PHP code to  PER 2.

* The third line of all PHP files should be <code>declare(strict_types=1);</code> to enforce strict typing.

* All traits should be called in alphabetical order in <code>use</code> statements immediately after the class definition, one trait per line.
 
* All class imports should be called in alphabetical order in <code>use</code>  statements at the top of the file, one import per line.

> Bad:
>
> <code>'user_model' => App\Models\User::class,</code>
>
> Good:
>
> <code>use App\Models\User;</code>
>
> <code>'user_model' => User::class,</code>

