<?php

use App\Structural\FluentBuilder\QueryBuilder;
use Tests\TestCase;

class FluentBuilderTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */


    public function testCanGetSqlFromQueryBuilder()
    {
    $QueryBuilder=new QueryBuilder();
    $QueryBuilder->select(['name','email'])->from('account','ac')->where(['id'=>30,'first_name'=>'ramy']);
    $this->assertEquals('SELECT name email FROM account AS ac WHERE 30 AND ramy',$QueryBuilder->SetSQl());
    }
}
