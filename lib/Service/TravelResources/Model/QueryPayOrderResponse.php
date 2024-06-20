<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


class QueryPayOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PayResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\TravelResources\Model\PayResponseDTO';
    }

    /**
     * @param PayResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
