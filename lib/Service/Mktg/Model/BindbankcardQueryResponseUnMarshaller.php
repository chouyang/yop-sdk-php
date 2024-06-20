<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindbankcardQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindbankcardQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindbankcardQueryResponseUnMarshaller();
    }

    /**
     * @return BindbankcardQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindbankcardQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BindbankcardQueryResponse();
    }
}

BindbankcardQueryResponseUnMarshaller::__init();
