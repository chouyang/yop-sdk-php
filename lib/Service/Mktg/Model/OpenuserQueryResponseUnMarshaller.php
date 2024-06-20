<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenuserQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenuserQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenuserQueryResponseUnMarshaller();
    }

    /**
     * @return OpenuserQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenuserQueryResponse
     */
    protected function getResponseInstance()
    {
        return new OpenuserQueryResponse();
    }
}

OpenuserQueryResponseUnMarshaller::__init();
