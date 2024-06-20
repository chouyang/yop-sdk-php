<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterAbroadContributeMerchantV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RegisterAbroadContributeMerchantV2ContributeMerchantNetInRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterAbroadContributeMerchantV2ContributeMerchantNetInRespDtoResult';
    }

    /**
     * @param RegisterAbroadContributeMerchantV2ContributeMerchantNetInRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterAbroadContributeMerchantV2ContributeMerchantNetInRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
