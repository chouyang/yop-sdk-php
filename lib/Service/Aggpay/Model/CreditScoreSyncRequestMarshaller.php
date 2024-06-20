<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CreditScoreSyncRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CreditScoreSyncRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditScoreSyncRequestMarshaller();
    }

    /**
     * @return CreditScoreSyncRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Aggpay';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/aggpay/creditscore-sync';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CreditScoreSyncRequest $request
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
        if($request->getCreditOrderId() != null){
            $internalRequest->addParameter('creditOrderId', ObjectSerializer::sanitizeForSerialization($request->getCreditOrderId(), 'string'));
        }
        if($request->getPaidTime() != null){
            $internalRequest->addParameter('paidTime', ObjectSerializer::sanitizeForSerialization($request->getPaidTime(), 'string'));
        }
        if($request->getType() != null){
            $internalRequest->addParameter('type', ObjectSerializer::sanitizeForSerialization($request->getType(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CreditScoreSyncRequestMarshaller::__init();
