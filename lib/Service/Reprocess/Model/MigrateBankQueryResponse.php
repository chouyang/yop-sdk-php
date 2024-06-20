<?php


namespace Yeepay\Yop\Sdk\Service\Reprocess\Model;


class MigrateBankQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryMigrateOrderResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Reprocess\Model\YopQueryMigrateOrderResDTO';
    }

    /**
     * @param YopQueryMigrateOrderResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryMigrateOrderResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
