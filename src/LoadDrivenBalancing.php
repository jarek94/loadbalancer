<?php


class LoadDrivenBalancing implements LoadBalancingAlgorithmInterface
{

    public function getHost(array $hosts): Host
    {
        function loadComparison(Host $a, Host $b) {
        if ($a->getLoad() == $b->getLoad()) {
            return 0;
        }
        return ($a->getLoad() < $b->getLoad()) ? -1 : 1;
    }

        usort($hosts, 'loadComparison');

        return $hosts[0];

    }


}
