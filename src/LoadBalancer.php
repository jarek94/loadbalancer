<?php


class LoadBalancer
{

    /**
     * @var array
     */
    private array $hosts;
    /**
     * @var \LoadBalancingAlgorithmInterface
     */
    private LoadBalancingAlgorithmInterface $loadBalancingAlgorithm;

    public function __construct(array $hosts, LoadBalancingAlgorithmInterface $loadBalancingAlgorithm)
    {
        $this->hosts = $hosts;
        $this->loadBalancingAlgorithm = $loadBalancingAlgorithm;
    }

    public function handleRequest(Request $request){

        $this->loadBalancingAlgorithm->getHost($this->hosts)->handleRequest($request);

    }



}
