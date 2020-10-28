<?php

namespace Modular\Core\ServiceProvider;

use Illuminate\Support\Facades\Log;

/**
 * Class ServiceProvider
 *
 * @package \Modular\Core\ServiceProvider
 */
abstract class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Namespace do kterého budou registrovány jednotlivé komponenty.
     * Pro fungování je nutné ji definovat v každém service provideru
     *
     * @var $vendorNamespace
     */
     protected $vendorNamespace;

    /**
     * Složka v namespace modular
     *
     * @var $vendorDir
     */
    protected $vendorDir;

    /**
     * Načte routy ze zadaných souborů, array ve formátu ['filename', 'filename', ...]
     * Zapisujeme bez koncovky souboru, načítá vždy .php
     *
     * @param array $fileNames
     */
    protected function loadRoutes(array $fileNames = ['web']): void
    {
        foreach ($fileNames as $fileName){
            $fileUrl = ( __DIR__ . '/../../../' . $this->vendorDir . '/routes/' . $fileName . '.php');
            if(file_exists($fileUrl)){
                $this->loadRoutesFrom($fileUrl);
            }
            else {
                Log::alert('Soubor ' . $fileUrl . ' nenalezen, routy nebyly načteny !');
            }
        }
    }

    /**
     * Registruje views ze zadané složky, defaultně '/resource/views/'
     * Složka se zadává od kořenového adresáře balíku.
     *
     * @param string $viewsDir
     */
    protected function loadViews(string $viewsDir = '/resource/views/'): void
    {
        $fileDir = ( __DIR__ . '/../../../' . $this->vendorDir . $viewsDir);
        if(is_dir($fileDir)){
            $this->loadViewsFrom($fileDir, $this->vendorNamespace);
        }
        else {
            Log::alert('Složka ' . $fileDir . ' nenalezena, views nebyly načteny !');
        }
    }

    /**
     * Zaregistruje configy dle zadané adresy a jména defaultně složka,
     * config a soubor config.php, zadává se bez konovky .php
     *
     * @param array|string[] $fileNames
     * @param string         $configDir
     */
    protected function registerConfig(array $fileNames = ['config', 'bind'], string $configDir = '/config/'): void
    {
        foreach ($fileNames as $fileNameIndex => $fileName){
            $fileUrl = ( __DIR__ . '/../../../' . $this->vendorDir . $configDir . $fileName . '.php');
            if(file_exists($fileUrl)) {
                $this->mergeConfigFrom($fileUrl, $this->vendorNamespace. '::' . $fileName);
            }
            else {
                Log::alert('Soubor ' . $fileUrl . ' nenalezen, config nebyly načteny !');
            }
        }
    }

    /**
     * Zaregistruje repozitáře jako singletony
     */
    protected function registerSingletons(): void
    {
        foreach (config($this->vendorNamespace . '::bind') as $abstract => $concrete) {
            $this->app->singleton($abstract, $concrete);
        }
    }

    /**
     * Zaregistruje migrace
     *
     * @param string $migrationsDir
     */
    protected function loadMigrations(string $migrationsDir = '/database/migrations/'): void
    {
        $fileDir = ( __DIR__ . '/../../../' . $this->vendorDir . $migrationsDir);
        if(is_dir($fileDir)){
            $this->loadMigrationsFrom($fileDir);
        }
        else {
            Log::alert('Složka ' . $fileDir . ' nenalezena, migrace nebyly načteny !');
        }
    }
}
