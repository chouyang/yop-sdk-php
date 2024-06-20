<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class AccountcloseApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountcloseApplyAccountCloseApplyResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\AccountcloseApplyAccountCloseApplyResponseResult';
    }

    /**
     * @param AccountcloseApplyAccountCloseApplyResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountcloseApplyAccountCloseApplyResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
