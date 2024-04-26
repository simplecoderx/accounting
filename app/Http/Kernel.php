protected $middlewareAliases = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'adminAuth' => \App\Http\Middleware\AdminAuth::class,
        'superAdminAuth' => \App\Http\Middleware\SuperAdminAuth::class,
        …
    ];