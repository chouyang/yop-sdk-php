<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class BindbankcardQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindbankcardQueryBindBankCardQueryResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\BindbankcardQueryBindBankCardQueryResponseResult';
    }

    /**
     * @param BindbankcardQueryBindBankCardQueryResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindbankcardQueryBindBankCardQueryResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
