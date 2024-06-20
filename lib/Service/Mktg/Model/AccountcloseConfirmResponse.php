<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class AccountcloseConfirmResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountcloseConfirmAccountCloseConfirmResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\AccountcloseConfirmAccountCloseConfirmResponseResult';
    }

    /**
     * @param AccountcloseConfirmAccountCloseConfirmResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountcloseConfirmAccountCloseConfirmResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
