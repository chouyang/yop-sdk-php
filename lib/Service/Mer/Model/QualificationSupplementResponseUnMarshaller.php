<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QualificationSupplementResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QualificationSupplementResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QualificationSupplementResponseUnMarshaller();
    }

    /**
     * @return QualificationSupplementResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QualificationSupplementResponse
     */
    protected function getResponseInstance()
    {
        return new QualificationSupplementResponse();
    }
}

QualificationSupplementResponseUnMarshaller::__init();
