<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class BindbankcardApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindbankcardApplyBindBankCardApplyResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\BindbankcardApplyBindBankCardApplyResponseResult';
    }

    /**
     * @param BindbankcardApplyBindBankCardApplyResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindbankcardApplyBindBankCardApplyResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
