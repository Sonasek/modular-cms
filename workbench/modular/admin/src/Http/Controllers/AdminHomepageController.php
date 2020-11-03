<?php

namespace Modular\Admin\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Modular\Core\Http\Controllers\BaseController;

/**
 * Class AdminHomepageController
 *
 * @package \Modular\Admin\Http\Controllers
 */
class AdminHomepageController extends BaseController
{
    public function __invoke(Request $request, string $key = 'homepage')
    {
        dd($key);
    }
}
