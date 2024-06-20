<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenuserApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenuserApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenuserApplyResponseUnMarshaller();
    }

    /**
     * @return OpenuserApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenuserApplyResponse
     */
    protected function getResponseInstance()
    {
        return new OpenuserApplyResponse();
    }
}

OpenuserApplyResponseUnMarshaller::__init();
