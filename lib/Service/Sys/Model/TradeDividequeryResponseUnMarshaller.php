<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeDividequeryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeDividequeryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeDividequeryResponseUnMarshaller();
    }

    /**
     * @return TradeDividequeryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeDividequeryResponse
     */
    protected function getResponseInstance()
    {
        return new TradeDividequeryResponse();
    }
}

TradeDividequeryResponseUnMarshaller::__init();
