<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


class OcrIdcardResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OcrIdcardOcrRecognizeResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Auth\Model\OcrIdcardOcrRecognizeResponseDTOResult';
    }

    /**
     * @param OcrIdcardOcrRecognizeResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OcrIdcardOcrRecognizeResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
