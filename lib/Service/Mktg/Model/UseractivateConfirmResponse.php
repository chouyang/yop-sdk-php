<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class UseractivateConfirmResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UseractivateConfirmMerchantUserActivateConfirmResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\UseractivateConfirmMerchantUserActivateConfirmResponseResult';
    }

    /**
     * @param UseractivateConfirmMerchantUserActivateConfirmResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UseractivateConfirmMerchantUserActivateConfirmResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
