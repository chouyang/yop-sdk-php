<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class CreditScoreSyncResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BaseResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\BaseResponseDTO';
    }

    /**
     * @param BaseResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BaseResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
