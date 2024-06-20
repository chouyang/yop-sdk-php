<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountcloseConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountcloseConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountcloseConfirmResponseUnMarshaller();
    }

    /**
     * @return AccountcloseConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountcloseConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new AccountcloseConfirmResponse();
    }
}

AccountcloseConfirmResponseUnMarshaller::__init();
