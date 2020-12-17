<?php


namespace valera261104\BaseClass\Tests;


use PHPUnit\Framework\TestCase;
use valera261104\BaseClass\Services\DataTypeService;

class DataTypeServiceTest extends TestCase
{

    public function testIsAssociativeArray()
    {
        $this->assertEquals(true, DataTypeService::isAssociativeArray(['key' => 'data']));

        $this->assertEquals(false, DataTypeService::isAssociativeArray([0,1,2]));

        $this->assertEquals(false, DataTypeService::isAssociativeArray('string'));
    }

    public function testIsNumericArray()
    {
        $this->assertEquals(false, DataTypeService::isNumericArray(['key' => 'data']));

        $this->assertEquals(true, DataTypeService::isNumericArray([0,1,2]));

        $this->assertEquals(false, DataTypeService::isNumericArray('string'));
    }

}