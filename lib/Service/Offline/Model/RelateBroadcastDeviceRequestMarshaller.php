<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class RelateBroadcastDeviceRequestMarshaller implements RequestMarshaller
{
    /**
     * @var RelateBroadcastDeviceRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RelateBroadcastDeviceRequestMarshaller();
    }

    /**
     * @return RelateBroadcastDeviceRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Offline';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/offline/relate-broadcast-device';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param RelateBroadcastDeviceRequest $request
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
        if($request->getQrCodeNo() != null){
            $internalRequest->addParameter('qrCodeNo', ObjectSerializer::sanitizeForSerialization($request->getQrCodeNo(), 'string'));
        }
        if($request->getOperateType() != null){
            $internalRequest->addParameter('operateType', ObjectSerializer::sanitizeForSerialization($request->getOperateType(), 'string'));
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getSerialNo() != null){
            $internalRequest->addParameter('serialNo', ObjectSerializer::sanitizeForSerialization($request->getSerialNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
RelateBroadcastDeviceRequestMarshaller::__init();
