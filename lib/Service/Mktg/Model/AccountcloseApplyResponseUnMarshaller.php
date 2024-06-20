<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountcloseApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountcloseApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountcloseApplyResponseUnMarshaller();
    }

    /**
     * @return AccountcloseApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountcloseApplyResponse
     */
    protected function getResponseInstance()
    {
        return new AccountcloseApplyResponse();
    }
}

AccountcloseApplyResponseUnMarshaller::__init();
