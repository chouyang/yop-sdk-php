<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class SignQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SignQueryEntrustWithholdSignQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\SignQueryEntrustWithholdSignQueryResponseDTOResult';
    }

    /**
     * @param SignQueryEntrustWithholdSignQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SignQueryEntrustWithholdSignQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
