<?php

use PHPUnit\Framework\TestCase;

final class SimpleBalancigTest extends TestCase
{
    public function testtHostCheck(): void
    {


        $hosts= [new Host(1), new Host(0.2)];
        $simpleBalancing = new SimpleBalancing();

        $this->assertEquals(
            1,$simpleBalancing->getHost($hosts)->getLoad());
    }

}


