<?php

namespace App\Providers;

use App\Repositories\AddressRepositoryInterface;
use App\Repositories\ViaCep\AddressRepository;
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
        $this->app->bind(AddressRepositoryInterface::class, AddressRepository::class);
    }
}
