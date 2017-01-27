<?php

namespace WebStore\Http\Controller;

use Respect\Rest\Routable;

class CategoriesController implements Routable
{

	public function get()
	{
		return "Categories";
	}
}