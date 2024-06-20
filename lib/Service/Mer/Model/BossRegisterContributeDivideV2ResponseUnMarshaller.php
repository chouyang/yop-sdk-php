<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BossRegisterContributeDivideV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BossRegisterContributeDivideV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BossRegisterContributeDivideV2ResponseUnMarshaller();
    }

    /**
     * @return BossRegisterContributeDivideV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BossRegisterContributeDivideV2Response
     */
    protected function getResponseInstance()
    {
        return new BossRegisterContributeDivideV2Response();
    }
}

BossRegisterContributeDivideV2ResponseUnMarshaller::__init();
