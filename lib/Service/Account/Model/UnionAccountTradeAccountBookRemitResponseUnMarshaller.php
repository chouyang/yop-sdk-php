<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountTradeAccountBookRemitResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountTradeAccountBookRemitResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountTradeAccountBookRemitResponseUnMarshaller();
    }

    /**
     * @return UnionAccountTradeAccountBookRemitResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountTradeAccountBookRemitResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountTradeAccountBookRemitResponse();
    }
}

UnionAccountTradeAccountBookRemitResponseUnMarshaller::__init();
