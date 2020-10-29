<?php

namespace Modular\Admin\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Modular\Core\Http\Controllers\BaseController;

/**
 * Class AdminLoginpageController
 *
 * @package \Modular\Admin\Http\Controllers
 */
class AdminLoginpageController extends BaseController
{
    public function __invoke()
    {
        if(Auth::check()){
            return redirect(route('admin'));
        }

        return view('modular-admin::login');
    }
}
