<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeorderQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeorderQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeorderQueryResponseUnMarshaller();
    }

    /**
     * @return TradeorderQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeorderQueryResponse
     */
    protected function getResponseInstance()
    {
        return new TradeorderQueryResponse();
    }
}

TradeorderQueryResponseUnMarshaller::__init();
