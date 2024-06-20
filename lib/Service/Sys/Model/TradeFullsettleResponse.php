<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


class TradeFullsettleResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TradeFullsettleYopOrderFundFullySettleResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\TradeFullsettleYopOrderFundFullySettleResDTOResult';
    }

    /**
     * @param TradeFullsettleYopOrderFundFullySettleResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeFullsettleYopOrderFundFullySettleResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
