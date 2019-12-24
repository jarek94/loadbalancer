<?php


class SimpleBalancing implements LoadBalancingAlgorithmInterface
{

    //simple cache imitation
    private int $lastUsedHostKey = -1;

    /**
     * @param int $lastUsedHostKey
     */
    private function setLastUsedHostKey(int $lastUsedHostKey): void
    {
        $this->lastUsedHostKey = $lastUsedHostKey;
    }


    public function getHost(array $hosts): Host
    {
        $nextHostKey = $this->lastUsedHostKey + 1;
        $this->setLastUsedHostKey($nextHostKey);
        return $hosts[$nextHostKey];
    }

}
