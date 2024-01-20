<?php

use App\creational\ProtoType\AutomaticCarProtoType;
use App\creational\ProtoType\ManualCarProtoType;
use Tests\TestCase;

class ProtoTypeTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */

    public function TestCanCreateAutomaticCarsWithClone()
    {
        $AutomaticCarProtoType = new AutomaticCarProtoType();
        for ($index = 0; $index < 10; $index++) {
            $this->assertInstanceOf(AutomaticCarProtoType::class, $AutomaticCarProtoType);
        }
    }
        /**
         * A basic feature test example.
         *
         * @return void
         */
        /**  @test */

        public function TestCanCreateManualCarsWithClone()
        {
            $ManualCarProtoType = new ManualCarProtoType();
            for ($index = 0; $index < 10; $index++) {
                $this->assertInstanceOf(ManualCarProtoType::class, $ManualCarProtoType);

            }


        }



}
