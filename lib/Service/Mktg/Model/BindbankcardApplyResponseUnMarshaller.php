<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindbankcardApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindbankcardApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindbankcardApplyResponseUnMarshaller();
    }

    /**
     * @return BindbankcardApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindbankcardApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BindbankcardApplyResponse();
    }
}

BindbankcardApplyResponseUnMarshaller::__init();
