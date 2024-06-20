<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterContributeMerchantV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RegisterContributeMerchantV2ContributeMerchantNetInRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeMerchantV2ContributeMerchantNetInRespDtoResult';
    }

    /**
     * @param RegisterContributeMerchantV2ContributeMerchantNetInRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterContributeMerchantV2ContributeMerchantNetInRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
