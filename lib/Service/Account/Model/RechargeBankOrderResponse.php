<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargeBankOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RechargeBankOrderBankPayRechargeRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeBankOrderBankPayRechargeRespDTOResult';
    }

    /**
     * @param RechargeBankOrderBankPayRechargeRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeBankOrderBankPayRechargeRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
