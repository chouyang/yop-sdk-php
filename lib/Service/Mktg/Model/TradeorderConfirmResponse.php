<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class TradeorderConfirmResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TradeorderConfirmTradeOrderConfirmResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\TradeorderConfirmTradeOrderConfirmResponseResult';
    }

    /**
     * @param TradeorderConfirmTradeOrderConfirmResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeorderConfirmTradeOrderConfirmResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
