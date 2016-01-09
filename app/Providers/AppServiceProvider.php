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
        $page = new \App\Coco\Page\Entities\Page();
        $root = $page->where('parent_id',0)->orderBy('rang','asc')->get();

        view()->share('hierarchy', $root);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerUserService();
        $this->registerPageService();
        $this->registerBlocService();
        $this->registerNewsService();
    }

    /**
     * User
     */
    protected function registerUserService(){

        $this->app->singleton('App\Coco\User\Repo\UserInterface', function()
        {
            return new \App\Coco\User\Repo\UserEloquent(new \App\Coco\User\Entities\User);
        });
    }

    /**
     * Page
     */
    protected function registerPageService(){

        $this->app->singleton('App\Coco\Page\Repo\PageInterface', function()
        {
            return new \App\Coco\Page\Repo\PageEloquent(new \App\Coco\Page\Entities\Page);
        });
    }

    /**
     * Bloc
     */
    protected function registerBlocService(){

        $this->app->singleton('App\Coco\Bloc\Repo\BlocInterface', function()
        {
            return new \App\Coco\Bloc\Repo\BlocEloquent(new \App\Coco\Bloc\Entities\Bloc);
        });
    }

    /**
     * News
     */
    protected function registerNewsService(){

        $this->app->singleton('App\Coco\News\Repo\NewsInterface', function()
        {
            return new \App\Coco\News\Repo\NewsEloquent(new \App\Coco\News\Entities\News);
        });
    }

}
