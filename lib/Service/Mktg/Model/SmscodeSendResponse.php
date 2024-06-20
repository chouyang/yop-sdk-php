<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class SmscodeSendResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SmscodeSendSendSmsResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\SmscodeSendSendSmsResponseResult';
    }

    /**
     * @param SmscodeSendSendSmsResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SmscodeSendSendSmsResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
