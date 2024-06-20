<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class UserinfoModifyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UserinfoModifyMerchantUserInfoModifyResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\UserinfoModifyMerchantUserInfoModifyResponseResult';
    }

    /**
     * @param UserinfoModifyMerchantUserInfoModifyResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UserinfoModifyMerchantUserInfoModifyResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
