<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RestV2MerBossRegisterContributeDivideResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RestV2MerBossRegisterContributeDivideResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RestV2MerBossRegisterContributeDivideResponseUnMarshaller();
    }

    /**
     * @return RestV2MerBossRegisterContributeDivideResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RestV2MerBossRegisterContributeDivideResponse
     */
    protected function getResponseInstance()
    {
        return new RestV2MerBossRegisterContributeDivideResponse();
    }
}

RestV2MerBossRegisterContributeDivideResponseUnMarshaller::__init();
