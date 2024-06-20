<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


class AccountdetailsPageQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountdetailsPageQueryAccountBusinessPageQueryResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\AccountdetailsPageQueryAccountBusinessPageQueryResponseResult';
    }

    /**
     * @param AccountdetailsPageQueryAccountBusinessPageQueryResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountdetailsPageQueryAccountBusinessPageQueryResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
