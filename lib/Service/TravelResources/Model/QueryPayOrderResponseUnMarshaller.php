<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryPayOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryPayOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryPayOrderResponseUnMarshaller();
    }

    /**
     * @return QueryPayOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryPayOrderResponse
     */
    protected function getResponseInstance()
    {
        return new QueryPayOrderResponse();
    }
}

QueryPayOrderResponseUnMarshaller::__init();
