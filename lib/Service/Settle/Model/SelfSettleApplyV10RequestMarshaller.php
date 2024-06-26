<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class SelfSettleApplyV10RequestMarshaller implements RequestMarshaller
{
    /**
     * @var SelfSettleApplyV10RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SelfSettleApplyV10RequestMarshaller();
    }

    /**
     * @return SelfSettleApplyV10RequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Settle';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/settle/self-settle/apply';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param SelfSettleApplyV10Request $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getSettleRequestNo() != null){
            $internalRequest->addParameter('settleRequestNo', ObjectSerializer::sanitizeForSerialization($request->getSettleRequestNo(), 'string'));
        }
        if($request->getOperatePeriod() != null){
            $internalRequest->addParameter('operatePeriod', ObjectSerializer::sanitizeForSerialization($request->getOperatePeriod(), 'string'));
        }
        if($request->getEndTime() != null){
            $internalRequest->addParameter('endTime', ObjectSerializer::sanitizeForSerialization($request->getEndTime(), '\DateTime', 'date-time'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        if($request->getBankRemark() != null){
            $internalRequest->addParameter('bankRemark', ObjectSerializer::sanitizeForSerialization($request->getBankRemark(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
SelfSettleApplyV10RequestMarshaller::__init();
