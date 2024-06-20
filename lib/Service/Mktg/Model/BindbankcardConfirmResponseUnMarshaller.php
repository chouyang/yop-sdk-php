<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindbankcardConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindbankcardConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindbankcardConfirmResponseUnMarshaller();
    }

    /**
     * @return BindbankcardConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindbankcardConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new BindbankcardConfirmResponse();
    }
}

BindbankcardConfirmResponseUnMarshaller::__init();
