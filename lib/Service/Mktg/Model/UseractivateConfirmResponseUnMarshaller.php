<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UseractivateConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UseractivateConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UseractivateConfirmResponseUnMarshaller();
    }

    /**
     * @return UseractivateConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UseractivateConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new UseractivateConfirmResponse();
    }
}

UseractivateConfirmResponseUnMarshaller::__init();
