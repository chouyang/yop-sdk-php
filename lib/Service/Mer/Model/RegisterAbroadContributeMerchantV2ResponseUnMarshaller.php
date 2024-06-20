<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterAbroadContributeMerchantV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterAbroadContributeMerchantV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterAbroadContributeMerchantV2ResponseUnMarshaller();
    }

    /**
     * @return RegisterAbroadContributeMerchantV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterAbroadContributeMerchantV2Response
     */
    protected function getResponseInstance()
    {
        return new RegisterAbroadContributeMerchantV2Response();
    }
}

RegisterAbroadContributeMerchantV2ResponseUnMarshaller::__init();
