<?php


namespace Yeepay\Yop\Sdk\Service\Reprocess\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MigrateBankOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MigrateBankOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MigrateBankOrderV10ResponseUnMarshaller();
    }

    /**
     * @return MigrateBankOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MigrateBankOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new MigrateBankOrderV10Response();
    }
}

MigrateBankOrderV10ResponseUnMarshaller::__init();
