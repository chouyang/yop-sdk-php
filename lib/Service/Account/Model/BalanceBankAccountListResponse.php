<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BalanceBankAccountListResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BalanceBankAccountListQueryInnerAndBankAccountInfoRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BalanceBankAccountListQueryInnerAndBankAccountInfoRespDTOResult';
    }

    /**
     * @param BalanceBankAccountListQueryInnerAndBankAccountInfoRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BalanceBankAccountListQueryInnerAndBankAccountInfoRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
