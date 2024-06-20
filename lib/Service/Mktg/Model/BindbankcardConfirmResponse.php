<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class BindbankcardConfirmResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindbankcardConfirmBindBankCardConfirmResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\BindbankcardConfirmBindBankCardConfirmResponseResult';
    }

    /**
     * @param BindbankcardConfirmBindBankCardConfirmResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindbankcardConfirmBindBankCardConfirmResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
