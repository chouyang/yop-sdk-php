<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


class TradeDividequeryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TradeDividequeryYopQueryOrderDivideResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\TradeDividequeryYopQueryOrderDivideResDTOResult';
    }

    /**
     * @param TradeDividequeryYopQueryOrderDivideResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeDividequeryYopQueryOrderDivideResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
