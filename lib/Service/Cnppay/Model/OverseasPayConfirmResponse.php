<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class OverseasPayConfirmResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OverseasPayConfirmPayResultResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasPayConfirmPayResultResponseDTOResult';
    }

    /**
     * @param OverseasPayConfirmPayResultResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OverseasPayConfirmPayResultResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
