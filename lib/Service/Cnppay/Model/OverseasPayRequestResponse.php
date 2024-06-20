<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class OverseasPayRequestResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OverseasPayRequestOverseasCardPayResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cnppay\Model\OverseasPayRequestOverseasCardPayResponseDTOResult';
    }

    /**
     * @param OverseasPayRequestOverseasCardPayResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OverseasPayRequestOverseasCardPayResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
