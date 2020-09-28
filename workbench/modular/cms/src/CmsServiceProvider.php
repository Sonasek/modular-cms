<?php

namespace Modular\Cms;

use Modular\Core\ServiceProvider\ServiceProvider;

/**
 * Zavádí čtení stránek vytvořených pomocí modular/cms-admin.
 *
 * @package \Modular\Cms
 */
class CmsServiceProvider extends ServiceProvider
{
    protected $vendorNamespace = 'modular-cms';
    protected $vendorDir = 'cms';
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRoutes();
        $this->registerViews();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

}
