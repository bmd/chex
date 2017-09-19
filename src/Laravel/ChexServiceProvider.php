<?php
namespace Chex\Laravel;

use Chex\Runner;

/**
 * Class ChexServiceProvider
 * @package Chex\Laravel
 */
class ChexServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(Runner::class, function () {
            return new Runner($this->app('config')->get('healthchecks.groups'));
        });
    }
}