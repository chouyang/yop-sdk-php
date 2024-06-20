<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class UseractivateApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UseractivateApplyMerchantUserActivateResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\UseractivateApplyMerchantUserActivateResponseResult';
    }

    /**
     * @param UseractivateApplyMerchantUserActivateResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UseractivateApplyMerchantUserActivateResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
