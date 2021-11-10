1. composer require laravel/breeze --dev
2. php artisan breeze:install
3. npm install
4. npm run dev
5. php artisan migrate
6. Retriving authenticated user:
    1. php artisan make:controller ShowController
    2. Route::get('/show-auth-user', [ShowController::class,'show_auth_user']);
7. User is Authenticated or not:
    1. Route::get('/check-auth-user', [ShowController::class,'check_auth_user']);
8. Protecting routes:
    1. Route::  get('/report', function () {
                return view('report');
                })->middleware(['auth']);
9. Redirecting unauthorised user to a specific page:
    1. go to App\Middlewarr\Authenticate.php and change route name.
    2. Make a product page.
    3. Route::get('/product', function () {
        return view('product');
        })->name('product');

