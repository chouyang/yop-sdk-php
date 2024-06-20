<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class UseractivateQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UseractivateQueryMerchantUserActivateQueryResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\UseractivateQueryMerchantUserActivateQueryResponseResult';
    }

    /**
     * @param UseractivateQueryMerchantUserActivateQueryResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UseractivateQueryMerchantUserActivateQueryResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
