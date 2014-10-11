<?php namespace Meetup\Providers;

use Illuminate\Routing\Router;
use Illuminate\Routing\Stack\Builder as Stack;
use Illuminate\Foundation\Support\Providers\AppServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * All of the application's route middleware keys.
	 *
	 * @var array
	 */
	protected $middleware = [
		'auth' => 'Meetup\Http\Middleware\AuthMiddleware',
		'auth.basic' => 'Meetup\Http\Middleware\BasicAuthMiddleware',
		'csrf' => 'Meetup\Http\Middleware\CsrfMiddleware',
		'guest' => 'Meetup\Http\Middleware\GuestMiddleware',
	];

	/**
	 * The application's middleware stack.
	 *
	 * @var array
	 */
	protected $stack = [
		'Meetup\Http\Middleware\MaintenanceMiddleware',
		'Illuminate\Cookie\Middleware\Guard',
		'Illuminate\Cookie\Middleware\Queue',
		'Illuminate\Session\Middleware\Reader',
		'Illuminate\Session\Middleware\Writer',
	];

	/**
	 * Build the application stack based on the provider properties.
	 *
	 * @return void
	 */
	public function stack()
	{
		$this->app->stack(function(Stack $stack, Router $router)
		{
			return $stack
				->middleware($this->stack)->then(function($request) use ($router)
				{
					return $router->dispatch($request);
				});
			});
	}

}
