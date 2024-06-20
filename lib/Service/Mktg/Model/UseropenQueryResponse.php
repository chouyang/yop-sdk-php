<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class UseropenQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UseropenQueryAccountOpenInfoQueryResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\UseropenQueryAccountOpenInfoQueryResponseResult';
    }

    /**
     * @param UseropenQueryAccountOpenInfoQueryResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UseropenQueryAccountOpenInfoQueryResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
