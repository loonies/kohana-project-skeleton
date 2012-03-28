<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
if ( ! Route::cache())
{
	Route::set('default', '(<controller>(/<action>(/<id>)))')
		->defaults(array(
			'controller' => 'welcome',
			'action'     => 'index',
		));


	// -- Set cache ------------------------------------------------------------

	if (Kohana::$caching)
	{
		Route::cache(TRUE);
	}
}
