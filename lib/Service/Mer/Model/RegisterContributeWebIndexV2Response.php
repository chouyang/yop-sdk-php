<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterContributeWebIndexV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RegisterContributeWebIndexV2CreateNetInUrlRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeWebIndexV2CreateNetInUrlRespDTOResult';
    }

    /**
     * @param RegisterContributeWebIndexV2CreateNetInUrlRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterContributeWebIndexV2CreateNetInUrlRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
