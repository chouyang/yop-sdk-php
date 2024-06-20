<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeFullsettleResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeFullsettleResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeFullsettleResponseUnMarshaller();
    }

    /**
     * @return TradeFullsettleResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeFullsettleResponse
     */
    protected function getResponseInstance()
    {
        return new TradeFullsettleResponse();
    }
}

TradeFullsettleResponseUnMarshaller::__init();
