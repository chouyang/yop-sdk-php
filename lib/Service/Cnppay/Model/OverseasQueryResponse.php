<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class OverseasQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OverseasQueryOverseasCardPayResultResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasQueryOverseasCardPayResultResponseDTOResult';
    }

    /**
     * @param OverseasQueryOverseasCardPayResultResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OverseasQueryOverseasCardPayResultResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
