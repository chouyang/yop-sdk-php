<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class AggReportQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $channel;
    /**
     * @var string
     */
    private $scene;
    /**
     * @var string
     */
    private $channelNo;
    /**
     * @var string
     */
    private $promotionType;

    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return AggReportQueryV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return AggReportQueryV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
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
     * @return AggReportQueryV10Request
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * Gets scene
     *
     * @return string
     */
    public function getScene()
    {
        return $this->scene;
    }

    /**
     * Sets scene
     *
     * @param string $scene
     * @return AggReportQueryV10Request
     */
    public function setScene($scene)
    {
        $this->scene = $scene;
        return $this;
    }
    /**
     * Gets channelNo
     *
     * @return string
     */
    public function getChannelNo()
    {
        return $this->channelNo;
    }

    /**
     * Sets channelNo
     *
     * @param string $channelNo
     * @return AggReportQueryV10Request
     */
    public function setChannelNo($channelNo)
    {
        $this->channelNo = $channelNo;
        return $this;
    }
    /**
     * Gets promotionType
     *
     * @return string
     */
    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * Sets promotionType
     *
     * @param string $promotionType
     * @return AggReportQueryV10Request
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType = $promotionType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'agg_report_query_v1_0';
    }


}
