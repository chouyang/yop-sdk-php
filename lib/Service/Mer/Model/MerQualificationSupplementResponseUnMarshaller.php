<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerQualificationSupplementResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerQualificationSupplementResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerQualificationSupplementResponseUnMarshaller();
    }

    /**
     * @return MerQualificationSupplementResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerQualificationSupplementResponse
     */
    protected function getResponseInstance()
    {
        return new MerQualificationSupplementResponse();
    }
}

MerQualificationSupplementResponseUnMarshaller::__init();
