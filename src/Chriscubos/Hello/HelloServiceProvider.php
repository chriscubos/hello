<?php 

namespace Chriscubos\Hello;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider 
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	
	public function boot()
	{
        $this->publishes([
            __DIR__.'/../../../config/hello.php' => config_path('hello.php'),
        ], 'config');

	}

	/**
	 * Register the service providex.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->booting(function(){
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Hello', 'Chriscubos\Hello\Hello');
		});
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
