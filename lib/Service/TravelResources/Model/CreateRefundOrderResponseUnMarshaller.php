<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreateRefundOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreateRefundOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreateRefundOrderResponseUnMarshaller();
    }

    /**
     * @return CreateRefundOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreateRefundOrderResponse
     */
    protected function getResponseInstance()
    {
        return new CreateRefundOrderResponse();
    }
}

CreateRefundOrderResponseUnMarshaller::__init();
