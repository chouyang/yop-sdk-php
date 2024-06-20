<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SmscodeSendResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SmscodeSendResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SmscodeSendResponseUnMarshaller();
    }

    /**
     * @return SmscodeSendResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SmscodeSendResponse
     */
    protected function getResponseInstance()
    {
        return new SmscodeSendResponse();
    }
}

SmscodeSendResponseUnMarshaller::__init();
