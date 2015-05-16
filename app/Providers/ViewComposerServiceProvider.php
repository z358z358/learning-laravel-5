<?php namespace App\Providers;

use App\Article;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->composeNavigation();
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Compose the navigation
	 */
	private function composeNavigation()
	{
		view()->composer('partials.nav', function($view)
		{
            $article = Article::latest();
			$view->with('latest', $article->exists() ? $article->first() : new Article());
		});
	}

}
