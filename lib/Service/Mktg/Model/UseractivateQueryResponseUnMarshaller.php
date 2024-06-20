<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UseractivateQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UseractivateQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UseractivateQueryResponseUnMarshaller();
    }

    /**
     * @return UseractivateQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UseractivateQueryResponse
     */
    protected function getResponseInstance()
    {
        return new UseractivateQueryResponse();
    }
}

UseractivateQueryResponseUnMarshaller::__init();
