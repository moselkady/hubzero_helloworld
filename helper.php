<?php
namespace Modules\HelloWorld;

use Hubzero\Module\Module;
use Lang;

class Helper extends Module
{
	/**
	 * Display module contents
	 *
	 * @return  void
	 */
	public function display()
	{
		$hello = Lang::txt('MOD_HELLOWORLD');

		require $this->getLayoutPath();
	}
}