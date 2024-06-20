<?php


namespace Yeepay\Yop\Sdk\Service\Reprocess\Model;


class MigrateBankOrderV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopMigrateResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Reprocess\Model\YopMigrateResDTO';
    }

    /**
     * @param YopMigrateResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopMigrateResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
