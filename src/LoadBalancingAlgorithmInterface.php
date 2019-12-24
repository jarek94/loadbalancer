<?php


interface LoadBalancingAlgorithmInterface
{

 public function getHost(array $hosts): Host;

}
