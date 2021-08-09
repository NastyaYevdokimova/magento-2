<?php

namespace Evdokymova\Module\Plugin;

class ExamplePlugin
{

	public function afterSetTitle(\Evdokymova\Module\Block\Module $subject, $title)
	{
		$title = $title . " to ";

		return [$title];
	}

}