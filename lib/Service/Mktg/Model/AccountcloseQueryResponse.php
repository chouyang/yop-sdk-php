<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class AccountcloseQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountcloseQueryAccountCloseQueryResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\AccountcloseQueryAccountCloseQueryResponseResult';
    }

    /**
     * @param AccountcloseQueryAccountCloseQueryResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountcloseQueryAccountCloseQueryResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
