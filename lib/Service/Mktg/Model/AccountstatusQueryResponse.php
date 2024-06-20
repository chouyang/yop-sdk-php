<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class AccountstatusQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountstatusQueryAccountStatusQueryResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\AccountstatusQueryAccountStatusQueryResponseResult';
    }

    /**
     * @param AccountstatusQueryAccountStatusQueryResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountstatusQueryAccountStatusQueryResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
