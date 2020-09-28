<?php

namespace Modular\Core\ServiceProvider;

use Illuminate\Support\Facades\Log;

/**
 * Class ServiceProvider
 *
 * @package \Modular\Core\ServiceProvider
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Namespace do kterého budou registrovány jednotlivé komponenty.
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
    protected function registerRoutes(array $fileNames = ['web']): void
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
    protected function registerViews(string $viewsDir = '/resource/views/'): void
    {
        $fileDir = ( __DIR__ . '/../../../' . $this->vendorDir . $viewsDir);
        if(is_dir($fileDir)){
            $this->loadViewsFrom($fileDir, $this->vendorNamespace);
        }
        else {
            Log::alert('Složka ' . $fileDir . ' nenalezena, views nebyly načteny !');
        }
    }
}
