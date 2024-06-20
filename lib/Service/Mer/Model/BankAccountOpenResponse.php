<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class BankAccountOpenResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankAccountOpenOpenAccountRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BankAccountOpenOpenAccountRespDtoResult';
    }

    /**
     * @param BankAccountOpenOpenAccountRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountOpenOpenAccountRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
