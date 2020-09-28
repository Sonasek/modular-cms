<?php

namespace Modular\Cms\Http\Controllers;

use Modular\Core\Http\Controllers\BaseController;

/**
 * Class HomepageController
 *
 * @package \Modular\Cms\Http\Controllers
 */
class HomepageController extends BaseController
{
    public function __invoke()
    {
        // controller se stará o načtení první stránky - označená v db jako default
        return view('modular-cms::homepage');
    }
}
