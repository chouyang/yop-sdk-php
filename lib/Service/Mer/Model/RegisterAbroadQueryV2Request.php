<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterAbroadQueryV2Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return RegisterAbroadQueryV2Request
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'registerAbroadQueryV2';
    }


}
