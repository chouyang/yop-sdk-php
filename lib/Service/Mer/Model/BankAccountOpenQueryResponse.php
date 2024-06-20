<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class BankAccountOpenQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankAccountOpenQueryQueryOpenAccountResultRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BankAccountOpenQueryQueryOpenAccountResultRespDtoResult';
    }

    /**
     * @param BankAccountOpenQueryQueryOpenAccountResultRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountOpenQueryQueryOpenAccountResultRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
