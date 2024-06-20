<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class OpenuserQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OpenuserQueryMerchantUserRecordQueryResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\OpenuserQueryMerchantUserRecordQueryResponseResult';
    }

    /**
     * @param OpenuserQueryMerchantUserRecordQueryResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenuserQueryMerchantUserRecordQueryResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
