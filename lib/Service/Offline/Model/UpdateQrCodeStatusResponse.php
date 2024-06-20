<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class UpdateQrCodeStatusResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopUpdateQrCodeStatusRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopUpdateQrCodeStatusRspDTO';
    }

    /**
     * @param YopUpdateQrCodeStatusRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopUpdateQrCodeStatusRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
