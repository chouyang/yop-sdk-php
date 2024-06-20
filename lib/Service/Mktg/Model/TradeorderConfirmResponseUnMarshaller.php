<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeorderConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeorderConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeorderConfirmResponseUnMarshaller();
    }

    /**
     * @return TradeorderConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeorderConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new TradeorderConfirmResponse();
    }
}

TradeorderConfirmResponseUnMarshaller::__init();
