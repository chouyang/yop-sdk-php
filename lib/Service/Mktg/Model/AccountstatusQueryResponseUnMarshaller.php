<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountstatusQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountstatusQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountstatusQueryResponseUnMarshaller();
    }

    /**
     * @return AccountstatusQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountstatusQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountstatusQueryResponse();
    }
}

AccountstatusQueryResponseUnMarshaller::__init();
