<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Produk;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $kategoris = ['Atasan', 'Bawahan', 'Aksesoris', 'Sepatu']; // atau ambil dari DB

    // Buat supaya $kategoris selalu tersedia di partial navbar
    View::composer('profile.partials.navbar', function ($view) use ($kategoris) {
        $view->with('kategoris', $kategoris);
    });
    }
}
