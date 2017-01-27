<?php

namespace WebStore\Http\Controller;

use Respect\Rest\Routable;

class ProductsController implements Routable
{

	public function get()
	{
		return "HEllo, world";
	}
}