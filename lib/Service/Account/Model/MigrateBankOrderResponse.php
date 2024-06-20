<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class MigrateBankOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MigrateBankOrderMigrateBankRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\MigrateBankOrderMigrateBankRespDTOResult';
    }

    /**
     * @param MigrateBankOrderMigrateBankRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MigrateBankOrderMigrateBankRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
