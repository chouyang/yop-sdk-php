<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountbalanceQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountbalanceQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountbalanceQueryResponseUnMarshaller();
    }

    /**
     * @return AccountbalanceQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountbalanceQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountbalanceQueryResponse();
    }
}

AccountbalanceQueryResponseUnMarshaller::__init();
