<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterAbroadQueryV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterAbroadQueryV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterAbroadQueryV2ResponseUnMarshaller();
    }

    /**
     * @return RegisterAbroadQueryV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterAbroadQueryV2Response
     */
    protected function getResponseInstance()
    {
        return new RegisterAbroadQueryV2Response();
    }
}

RegisterAbroadQueryV2ResponseUnMarshaller::__init();
