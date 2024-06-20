<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountcloseQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountcloseQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountcloseQueryResponseUnMarshaller();
    }

    /**
     * @return AccountcloseQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountcloseQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountcloseQueryResponse();
    }
}

AccountcloseQueryResponseUnMarshaller::__init();
