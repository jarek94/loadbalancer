<?php

class Host
{
    /**
     * @var float
     */
    private float $load;

    public function __construct(float $load)
    {
        $this->load = $load;
    }


    public function getLoad(): float
    {

        return $this->load;
    }

    public function handleRequest(Request $request): void
    {

    }

}
