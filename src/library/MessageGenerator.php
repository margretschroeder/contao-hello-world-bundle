<?php

declare(strict_types=1);

namespace Margretschroeder\ContaoHelloWorldBundle\Library;

class MessageGenerator
{
	    public function sayHelloTo(string $target): string
    {
			
		if (empty($target)) {
            throw new \InvalidArgumentException('Target must not be empty.');
        }	
			
			
		$message = 'Hallo '.$target;

        return $message;
    }


}