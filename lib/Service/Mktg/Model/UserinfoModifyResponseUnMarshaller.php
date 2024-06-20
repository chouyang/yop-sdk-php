<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UserinfoModifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UserinfoModifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UserinfoModifyResponseUnMarshaller();
    }

    /**
     * @return UserinfoModifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UserinfoModifyResponse
     */
    protected function getResponseInstance()
    {
        return new UserinfoModifyResponse();
    }
}

UserinfoModifyResponseUnMarshaller::__init();
