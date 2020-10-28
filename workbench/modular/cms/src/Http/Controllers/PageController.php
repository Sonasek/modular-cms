<?php

namespace Modular\Cms\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Modular\Core\Http\Controllers\BaseController;

/**
 * Class PageController
 *
 * @package \Modular\Cms\Http\Controllers
 */
class PageController extends BaseController
{
    // Controller se stará o načtení stránky podle zadaného
    // page_tagu pokud není zadáný, tak načítá homepage
    public function __invoke(Request $request, string $page_tag = 'homepage')
    {
        if(null === $data = modularCmsContainer()->initPageByTag($page_tag)){
            abort(404);
        }

        return view('modular-cms::page',
            [
                'header' =>  modularCmsContainer()->getHeader(),
                'footer' => modularCmsContainer()->getfooter(),
                'menu' => modularCmsContainer()->getmenu(),
                'datalayer' => modularCmsContainer()->getdatalayer(),
                'page' => modularCmsContainer()->getpage(),
                'sections' => modularCmsContainer()->getsections(),
            ]
        );
    }
}
