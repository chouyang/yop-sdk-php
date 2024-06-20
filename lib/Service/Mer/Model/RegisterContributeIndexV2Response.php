<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterContributeIndexV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RegisterContributeIndexV2UserPreRegisterRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeIndexV2UserPreRegisterRespDtoResult';
    }

    /**
     * @param RegisterContributeIndexV2UserPreRegisterRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterContributeIndexV2UserPreRegisterRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
