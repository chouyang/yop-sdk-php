<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class TransferGroupAccountV1RequestMarshaller implements RequestMarshaller
{
    /**
     * @var TransferGroupAccountV1RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferGroupAccountV1RequestMarshaller();
    }

    /**
     * @return TransferGroupAccountV1RequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Account';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/account/group/account/transfer';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param TransferGroupAccountV1Request $request
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
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getFromMerchantNo() != null){
            $internalRequest->addParameter('fromMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getFromMerchantNo(), 'string'));
        }
        if($request->getToMerchantNo() != null){
            $internalRequest->addParameter('toMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getToMerchantNo(), 'string'));
        }
        if($request->getOrderAmount() != null){
            $internalRequest->addParameter('orderAmount', ObjectSerializer::sanitizeForSerialization($request->getOrderAmount(), 'string'));
        }
        if($request->getUsage() != null){
            $internalRequest->addParameter('usage', ObjectSerializer::sanitizeForSerialization($request->getUsage(), 'string'));
        }
        if($request->getFeeChargeSide() != null){
            $internalRequest->addParameter('feeChargeSide', ObjectSerializer::sanitizeForSerialization($request->getFeeChargeSide(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string', 'notify-url'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
TransferGroupAccountV1RequestMarshaller::__init();
