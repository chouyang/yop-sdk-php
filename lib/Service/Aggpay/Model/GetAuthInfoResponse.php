<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class GetAuthInfoResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var GetAuthInfoPassiveGetAuthInfoResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\GetAuthInfoPassiveGetAuthInfoResponseDTOResult';
    }

    /**
     * @param GetAuthInfoPassiveGetAuthInfoResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return GetAuthInfoPassiveGetAuthInfoResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
