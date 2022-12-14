<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Term;
use App\Observers\CategoryObserver;
use App\Observers\DoctorObserver;
use App\Observers\ServiceObserver;
use App\Observers\TermObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Blade Components
        Blade::aliasComponent('components.create_btn', 'create_btn');
        Blade::aliasComponent('components.header', 'header');
        Blade::aliasComponent('components.pagination', 'pagination');
        Blade::aliasComponent('components.table', 'table');
        Blade::aliasComponent('components.thead_tr', 'thead_tr');
        Blade::aliasComponent('components.th_sortable', 'th_sortable');
        Blade::aliasComponent('components.container', 'container');
        Blade::aliasComponent('components.pagination_with_buttons', 'pagination_with_buttons');
        Blade::aliasComponent('components.action_delete_btn', 'action_delete_btn');
        Blade::aliasComponent('components.action_edit_btn', 'action_edit_btn');
        Blade::aliasComponent('components.td_table', 'td_table');
        Blade::aliasComponent('components.input', 'input');
        Blade::aliasComponent('components.input_edit', 'input_edit');
        Blade::aliasComponent('components.action_deleteAndRestore', 'deleteAndRestore');

        // Observer provider
        Service::observe(ServiceObserver::class);
        Category::observe(CategoryObserver::class);
        Term::observe(TermObserver::class);
        Doctor::observe(DoctorObserver::class);

        Paginator::useBootstrap();
    }
}