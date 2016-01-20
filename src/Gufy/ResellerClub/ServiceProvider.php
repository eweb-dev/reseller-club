<?php

namespace Gufy\ResellerClub;

class ServiceProvider extends Illuminate\Support\ServiceProvider {
	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot() { }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->publishes([
			__DIR__.'/../../config/config.php' => config_path('resellerclub.php')
		], 'config');
	}
}
