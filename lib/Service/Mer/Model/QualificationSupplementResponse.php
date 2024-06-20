<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class QualificationSupplementResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SupplementMerQuaRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\SupplementMerQuaRespDTO';
    }

    /**
     * @param SupplementMerQuaRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SupplementMerQuaRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
