<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterAbroadQueryV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RegisterAbroadQueryV2NetInProgressQueryRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterAbroadQueryV2NetInProgressQueryRespDtoResult';
    }

    /**
     * @param RegisterAbroadQueryV2NetInProgressQueryRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterAbroadQueryV2NetInProgressQueryRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
