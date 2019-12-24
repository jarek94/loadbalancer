<?php

use PHPUnit\Framework\TestCase;

final class LoadDrivenBalancingTest extends TestCase
{
    public function testGetMinimumLoadedHost(): void
    {

        $hosts= [new Host(0.6), new Host(0.3), new Host(0.74)];
        $loadBalancer = new LoadDrivenBalancing();

        $this->assertEquals(
            0.3,$loadBalancer->getHost($hosts)->getLoad());
    }

}


