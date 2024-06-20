<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class UnsignResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UnsignEntrustWithholdUnSignResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\UnsignEntrustWithholdUnSignResponseDTOResult';
    }

    /**
     * @param UnsignEntrustWithholdUnSignResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UnsignEntrustWithholdUnSignResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
