<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        config( [
            'laravellocalization.supportedLocales' => [
                'kaz' => array(
                    'name'   => 'Kazakh',
                    'script' => 'Cyrl',
                    'native' => 'қазақ тілі'
                ),

                'en'  => array(
                    'name'   => 'English',
                    'script' => 'Latn',
                    'native' => 'English'
                ),
                'ru'  => array(
                    'name'   => 'Russian',
                    'script' => 'Cyrl',
                    'native' => 'русский'
                ),
            ],

            'laravellocalization.useAcceptLanguageHeader' => true,

            'laravellocalization.hideDefaultLocaleInURL' => true
        ] );
    }
}
