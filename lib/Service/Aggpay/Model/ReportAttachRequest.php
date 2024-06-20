<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ReportAttachRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $channel;
    /**
     * @var string
     */
    private $mainChannelNo;
    /**
     * @var string
     */
    private $mainReportMerchantNo;
    /**
     * @var string
     */
    private $merchantNoList;
    /**
     * @var string
     */
    private $authFileName;
    /**
     * @var string
     */
    private $authFileUrl;
    /**
     * @var string
     */
    private $groupName;
    /**
     * @var string
     */
    private $requestReason;
    /**
     * @var string
     */
    private $payWayList;
    /**
     * @var string
     */
    private $notifyUrl;

    /**
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets channel
     *
     * @param string $channel
     * @return ReportAttachRequest
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * Gets mainChannelNo
     *
     * @return string
     */
    public function getMainChannelNo()
    {
        return $this->mainChannelNo;
    }

    /**
     * Sets mainChannelNo
     *
     * @param string $mainChannelNo
     * @return ReportAttachRequest
     */
    public function setMainChannelNo($mainChannelNo)
    {
        $this->mainChannelNo = $mainChannelNo;
        return $this;
    }
    /**
     * Gets mainReportMerchantNo
     *
     * @return string
     */
    public function getMainReportMerchantNo()
    {
        return $this->mainReportMerchantNo;
    }

    /**
     * Sets mainReportMerchantNo
     *
     * @param string $mainReportMerchantNo
     * @return ReportAttachRequest
     */
    public function setMainReportMerchantNo($mainReportMerchantNo)
    {
        $this->mainReportMerchantNo = $mainReportMerchantNo;
        return $this;
    }
    /**
     * Gets merchantNoList
     *
     * @return string
     */
    public function getMerchantNoList()
    {
        return $this->merchantNoList;
    }

    /**
     * Sets merchantNoList
     *
     * @param string $merchantNoList
     * @return ReportAttachRequest
     */
    public function setMerchantNoList($merchantNoList)
    {
        $this->merchantNoList = $merchantNoList;
        return $this;
    }
    /**
     * Gets authFileName
     *
     * @return string
     */
    public function getAuthFileName()
    {
        return $this->authFileName;
    }

    /**
     * Sets authFileName
     *
     * @param string $authFileName
     * @return ReportAttachRequest
     */
    public function setAuthFileName($authFileName)
    {
        $this->authFileName = $authFileName;
        return $this;
    }
    /**
     * Gets authFileUrl
     *
     * @return string
     */
    public function getAuthFileUrl()
    {
        return $this->authFileUrl;
    }

    /**
     * Sets authFileUrl
     *
     * @param string $authFileUrl
     * @return ReportAttachRequest
     */
    public function setAuthFileUrl($authFileUrl)
    {
        $this->authFileUrl = $authFileUrl;
        return $this;
    }
    /**
     * Gets groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Sets groupName
     *
     * @param string $groupName
     * @return ReportAttachRequest
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * Gets requestReason
     *
     * @return string
     */
    public function getRequestReason()
    {
        return $this->requestReason;
    }

    /**
     * Sets requestReason
     *
     * @param string $requestReason
     * @return ReportAttachRequest
     */
    public function setRequestReason($requestReason)
    {
        $this->requestReason = $requestReason;
        return $this;
    }
    /**
     * Gets payWayList
     *
     * @return string
     */
    public function getPayWayList()
    {
        return $this->payWayList;
    }

    /**
     * Sets payWayList
     *
     * @param string $payWayList
     * @return ReportAttachRequest
     */
    public function setPayWayList($payWayList)
    {
        $this->payWayList = $payWayList;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return ReportAttachRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'reportAttach';
    }


}
