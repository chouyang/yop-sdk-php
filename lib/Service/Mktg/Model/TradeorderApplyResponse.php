<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class TradeorderApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TradeorderApplyTradeOrderApplyResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\TradeorderApplyTradeOrderApplyResponseResult';
    }

    /**
     * @param TradeorderApplyTradeOrderApplyResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeorderApplyTradeOrderApplyResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
