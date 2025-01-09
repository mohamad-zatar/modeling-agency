<?php

namespace App\Providers;

use App\Models\Category;
use App\Repositories\BaseRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\Contracts\BaseRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * ------------------
     * !!IMPORTANT NOTE!!
     * ------------------
     *
     * line (21) demonstrates binding an interface to its implementation.
     * If deleted, Laravel's automatic dependency injection will still resolve
     * the interface as long as there's a single concrete implementation available.
     *
     */
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
