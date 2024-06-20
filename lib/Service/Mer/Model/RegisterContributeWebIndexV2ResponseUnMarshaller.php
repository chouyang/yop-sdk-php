<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterContributeWebIndexV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterContributeWebIndexV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterContributeWebIndexV2ResponseUnMarshaller();
    }

    /**
     * @return RegisterContributeWebIndexV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterContributeWebIndexV2Response
     */
    protected function getResponseInstance()
    {
        return new RegisterContributeWebIndexV2Response();
    }
}

RegisterContributeWebIndexV2ResponseUnMarshaller::__init();
