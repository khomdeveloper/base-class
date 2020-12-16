<?php

namespace valera261104\BaseClass\Tests;

use valera261104\BaseClass\Services\StaticStringService;

class StaticStringServiceTest extends \PHPUnit\Framework\TestCase
{

    public function testCamelCaseToUnderscore()
    {
            $string = 'SomeCamelCaseString';

            $result = StaticStringService::camelCaseToUnderScore($string, ' ');

            $this->assertEquals('some camel case string', $result);

    }

}