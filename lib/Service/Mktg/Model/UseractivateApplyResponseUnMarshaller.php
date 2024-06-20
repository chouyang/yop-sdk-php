<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UseractivateApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UseractivateApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UseractivateApplyResponseUnMarshaller();
    }

    /**
     * @return UseractivateApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UseractivateApplyResponse
     */
    protected function getResponseInstance()
    {
        return new UseractivateApplyResponse();
    }
}

UseractivateApplyResponseUnMarshaller::__init();
