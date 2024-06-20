<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountManageAccountOpenV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountBookCreateResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateResponseDto';
    }

    /**
     * @param AccountBookCreateResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountBookCreateResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
