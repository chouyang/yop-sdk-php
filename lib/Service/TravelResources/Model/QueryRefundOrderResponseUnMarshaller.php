<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryRefundOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryRefundOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryRefundOrderResponseUnMarshaller();
    }

    /**
     * @return QueryRefundOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryRefundOrderResponse
     */
    protected function getResponseInstance()
    {
        return new QueryRefundOrderResponse();
    }
}

QueryRefundOrderResponseUnMarshaller::__init();
