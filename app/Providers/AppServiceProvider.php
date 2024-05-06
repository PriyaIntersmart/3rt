<?php

namespace App\Providers;

use App\Models\Address;
use App\Models\SiteCommonContent;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        View::composer('frontend::*', function ($view) {
        $siteCommon =  SiteCommonContent::first();
        $address=Address::active()->orderBy('sort_order')->get();


        $view->with(compact('siteCommon','address'));
    });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
        Blade::directive('themeSettings', function ($key) {
            return "<?php echo \App\Helpers\AdminHelper::getValueByKey($key); ?>";
        });
    }
}
