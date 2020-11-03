<?php

namespace Modular\Admin;

use Livewire\Livewire;
use Modular\Admin\Http\Livewire\LoginForm;
use Modular\Core\ServiceProvider\ServiceProvider;

/**
 * Class AdminServiceProvider
 *
 * @package \Modular\Admin
 */

require_once __DIR__ . '/../helpers/helper_repositories.php';
require_once __DIR__ . '/../helpers/helper_containers.php';

class AdminServiceProvider extends ServiceProvider
{
    /** @var string $vendorNamespace */
    protected $vendorNamespace = 'modular-admin';

    /** @var string $vendorDir */
    protected $vendorDir = 'admin';

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig(['config', 'bind', 'middlewares']);
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
            Livewire::component($this->vendorNamespace . '::login-form', LoginForm::class);
            $this->loadRoutes();
            $this->loadViews();
            $this->loadMiddlewares();
            $this->loadTranslations();
        }
    }
}
