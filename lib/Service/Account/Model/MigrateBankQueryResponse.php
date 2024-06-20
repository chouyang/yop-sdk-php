<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class MigrateBankQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MigrateBankQueryMigrateBankQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\MigrateBankQueryMigrateBankQueryRespDTOResult';
    }

    /**
     * @param MigrateBankQueryMigrateBankQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MigrateBankQueryMigrateBankQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
