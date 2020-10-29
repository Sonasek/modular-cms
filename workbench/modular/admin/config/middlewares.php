<?php

/* Pro registraci middlewares */

return [
    'admin' => \Modular\Admin\Http\Middleware\IsLoggedAsAdminMiddleware::class,
];
