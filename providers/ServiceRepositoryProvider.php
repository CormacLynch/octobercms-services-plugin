<?php

namespace GetRight\Services\Providers;

use GetRight\Services\Models\Service;
use GetRight\Services\Repositories\ServiceRepository;
use Illuminate\Support\ServiceProvider;

class ServiceRepositoryProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ServiceRepository', function ($app) {
            return new ServiceRepository(new Service());
        });
    }

    public function provides() {
        return ['GetRight\Services\Repositories\ServiceRepository'];
    }
}
