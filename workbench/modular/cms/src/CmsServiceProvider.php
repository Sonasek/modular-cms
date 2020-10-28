<?php

namespace Modular\Cms;

use Modular\Core\ServiceProvider\ServiceProvider;

/**
 * Zavádí čtení stránek vytvořených pomocí modular/cms-admin.
 *
 * @package \Modular\Cms
 */

require_once __DIR__ . '/../helpers/helper_repositories.php';
require_once __DIR__ . '/../helpers/helper_containers.php';

class CmsServiceProvider extends ServiceProvider
{
    /** @var string $vendorNamespace */
    protected $vendorNamespace = 'modular-cms';

    /** @var string $vendorDir */
    protected $vendorDir = 'cms';

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
        if(config($this->vendorNamespace. '::config.enabled')){
            $this->registerSingletons();
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrations();
        }
        if(config($this->vendorNamespace. '::config.enabled')){
            $this->loadRoutes();
            $this->loadViews();
        }
    }
}
