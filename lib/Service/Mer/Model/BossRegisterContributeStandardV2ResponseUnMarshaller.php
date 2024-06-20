<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BossRegisterContributeStandardV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BossRegisterContributeStandardV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BossRegisterContributeStandardV2ResponseUnMarshaller();
    }

    /**
     * @return BossRegisterContributeStandardV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BossRegisterContributeStandardV2Response
     */
    protected function getResponseInstance()
    {
        return new BossRegisterContributeStandardV2Response();
    }
}

BossRegisterContributeStandardV2ResponseUnMarshaller::__init();
