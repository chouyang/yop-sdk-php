<?php


namespace Yeepay\Yop\Sdk\Service\Prepay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CompleteResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CompleteResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompleteResponseUnMarshaller();
    }

    /**
     * @return CompleteResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CompleteResponse
     */
    protected function getResponseInstance()
    {
        return new CompleteResponse();
    }
}

CompleteResponseUnMarshaller::__init();
