<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UseropenQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UseropenQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UseropenQueryResponseUnMarshaller();
    }

    /**
     * @return UseropenQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UseropenQueryResponse
     */
    protected function getResponseInstance()
    {
        return new UseropenQueryResponse();
    }
}

UseropenQueryResponseUnMarshaller::__init();
