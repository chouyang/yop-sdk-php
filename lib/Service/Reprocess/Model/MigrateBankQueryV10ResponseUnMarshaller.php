<?php


namespace Yeepay\Yop\Sdk\Service\Reprocess\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MigrateBankQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MigrateBankQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MigrateBankQueryV10ResponseUnMarshaller();
    }

    /**
     * @return MigrateBankQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MigrateBankQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new MigrateBankQueryV10Response();
    }
}

MigrateBankQueryV10ResponseUnMarshaller::__init();
