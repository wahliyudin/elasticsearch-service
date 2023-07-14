<?php

namespace Wahliyudin\ElasticsearchService;

use Illuminate\Support\ServiceProvider;

class ElasticsearchServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishAssets();
    }

    /**
     * Publish datatables assets.
     */
    protected function publishAssets(): void
    {
        $this->publishes([
            __DIR__ . '/config/elasticsearch-connection.php' => config_path('elasticsearch-connection.php'),
        ], 'elasticsearch-connection');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/config/elasticsearch-connection.php', 'elasticsearch-connection');
    }
}