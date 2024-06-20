<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


class BillFundbillBolEndbalanceApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BillFundbillBolEndbalanceApplyManualGenerationLfBankEndBalResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillBolEndbalanceApplyManualGenerationLfBankEndBalResponseDTOResult';
    }

    /**
     * @param BillFundbillBolEndbalanceApplyManualGenerationLfBankEndBalResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BillFundbillBolEndbalanceApplyManualGenerationLfBankEndBalResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
