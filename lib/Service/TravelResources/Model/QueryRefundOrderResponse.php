<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


class QueryRefundOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RefundOrderResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\TravelResources\Model\RefundOrderResponseDTO';
    }

    /**
     * @param RefundOrderResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RefundOrderResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
