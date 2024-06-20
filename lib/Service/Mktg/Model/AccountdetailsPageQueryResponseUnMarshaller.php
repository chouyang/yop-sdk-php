<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountdetailsPageQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountdetailsPageQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountdetailsPageQueryResponseUnMarshaller();
    }

    /**
     * @return AccountdetailsPageQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountdetailsPageQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountdetailsPageQueryResponse();
    }
}

AccountdetailsPageQueryResponseUnMarshaller::__init();
