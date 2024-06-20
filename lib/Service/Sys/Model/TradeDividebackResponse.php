<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


class TradeDividebackResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TradeDividebackYopDivideBackResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\TradeDividebackYopDivideBackResDTOResult';
    }

    /**
     * @param TradeDividebackYopDivideBackResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeDividebackYopDivideBackResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
