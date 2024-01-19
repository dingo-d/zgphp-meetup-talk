<?php

namespace App;

final readonly class A
{
	public const FOO = 'foo';

	public function foo(): string
	{
		return self::FOO;
	}
}
