<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class SignResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SignEntrustWithholdSignResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\SignEntrustWithholdSignResponseDTOResult';
    }

    /**
     * @param SignEntrustWithholdSignResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SignEntrustWithholdSignResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
