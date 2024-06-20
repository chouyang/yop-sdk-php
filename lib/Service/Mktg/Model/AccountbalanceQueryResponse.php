<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class AccountbalanceQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountbalanceQueryAccountBalanceQueryResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\AccountbalanceQueryAccountBalanceQueryResponseResult';
    }

    /**
     * @param AccountbalanceQueryAccountBalanceQueryResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountbalanceQueryAccountBalanceQueryResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
