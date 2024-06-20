<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeorderApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeorderApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeorderApplyResponseUnMarshaller();
    }

    /**
     * @return TradeorderApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeorderApplyResponse
     */
    protected function getResponseInstance()
    {
        return new TradeorderApplyResponse();
    }
}

TradeorderApplyResponseUnMarshaller::__init();
