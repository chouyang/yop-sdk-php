<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RestV2MerBossRegisterContributeStandardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RestV2MerBossRegisterContributeStandardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RestV2MerBossRegisterContributeStandardResponseUnMarshaller();
    }

    /**
     * @return RestV2MerBossRegisterContributeStandardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RestV2MerBossRegisterContributeStandardResponse
     */
    protected function getResponseInstance()
    {
        return new RestV2MerBossRegisterContributeStandardResponse();
    }
}

RestV2MerBossRegisterContributeStandardResponseUnMarshaller::__init();
