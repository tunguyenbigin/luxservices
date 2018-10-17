<?php

namespace Modules\Users\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Modules\Users\Services\UserServices;
use Modules\Users\Entities\UserTMP;
use View;

class UsersServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');


        app()->singleton(\Modules\Users\Repositories\UserRepositories::class, \Modules\Users\Repositories\Eloquents\EloquentUserRepositories::class);
        app()->singleton(\Modules\Users\Services\UserServices::class, \Modules\Users\Services\Eloquents\EloquentUserServices::class);

        app()->singleton(\Modules\Users\Repositories\ProfileRepositories::class, \Modules\Users\Repositories\Eloquents\EloquentProfileRepositories::class);
        app()->singleton(\Modules\Users\Services\ProfileServices::class, \Modules\Users\Services\Eloquents\EloquentProfileServices::class);

        $this->registerValidation();

        $this->shareData();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function shareData(){
        View::composer('*', function($view)
        {
            $view->with('ownerProfile', [ 'avatar' => 'https://luxservices.dev/storage/upload/users/15/avatars/10001_avatar.png']);
        });
    }

    protected function registerValidation(){
        $userTMP = app()->make(UserTMP::class);
        //validate step register valid
        Validator::extend('is_valid', function ($attribute, $value, $parameters, $validator){
            $userData = Session::get('userTMP');
            if($value == 1) return true;
            for($i=1; $i<$value; $i++){
                if(!in_array($i, $userData['step'])){
                    return false;
                }
            }
            return true;
        });
        //end step register valid

        Validator::extend('verify_code', function ($attribute, $value, $parameters, $validator) use( $userTMP ) {
            $userData = Session::get('userTMP');
            $tmpData = $userTMP->where(['code' => $value, 'phone' => $userData['phone']])->first();
            if($tmpData) return true;
            return false;
        });


        Validator::extend('check_spam', function ($attribute, $value, $parameters, $validator) use( $userTMP ){
            $tmpData = $userTMP->where('phone', $value)->first();
            if(!$tmpData) return true;
            if($tmpData->time > env('TIME_SPAM_PHONENUMBER', 5)) return false;
            return true;
        });


    }


    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('users.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'users'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/users');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/users';
        }, \Config::get('view.paths')), [$sourcePath]), 'users');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/users');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'users');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'users');
        }
    }

    /**
     * Register an additional directory of factories.
     * 
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production')) {
            app(Factory::class)->load(__DIR__ . '/../Database/factories');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
