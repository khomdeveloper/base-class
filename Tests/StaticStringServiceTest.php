<?php

namespace BaseClass\Tests;


use BaseClass\StaticStringService;

class StaticStringServiceTest extends \PHPUnit\Framework\TestCase
{

    public function testCamelCaseToUnderscore()
    {
            $string = 'SomeCamelCaseString';

            $result = StaticStringService::camelCaseToUnderScore($string, ' ');

            $this->assertEquals('some camel case string', $result);

    }

}