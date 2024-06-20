<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class OpenuserApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OpenuserApplyMerchantUserOpenResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\OpenuserApplyMerchantUserOpenResponseResult';
    }

    /**
     * @param OpenuserApplyMerchantUserOpenResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenuserApplyMerchantUserOpenResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
