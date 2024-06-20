<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class TradeorderQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TradeorderQueryTradeOrderQueryResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\TradeorderQueryTradeOrderQueryResponseResult';
    }

    /**
     * @param TradeorderQueryTradeOrderQueryResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TradeorderQueryTradeOrderQueryResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
