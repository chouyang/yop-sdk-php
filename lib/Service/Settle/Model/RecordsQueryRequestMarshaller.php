<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class RecordsQueryRequestMarshaller implements RequestMarshaller
{
    /**
     * @var RecordsQueryRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RecordsQueryRequestMarshaller();
    }

    /**
     * @return RecordsQueryRequestMarshaller
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
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/settle/records/query';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param RecordsQueryRequest $request
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
        if($request->getReceiverMerchantNo() != null){
            $internalRequest->addParameter('receiverMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getReceiverMerchantNo(), 'string'));
        }
        if($request->getSettleRequestNo() != null){
            $internalRequest->addParameter('settleRequestNo', ObjectSerializer::sanitizeForSerialization($request->getSettleRequestNo(), 'string'));
        }
        if($request->getSettleRequestBeginTime() != null){
            $internalRequest->addParameter('settleRequestBeginTime', ObjectSerializer::sanitizeForSerialization($request->getSettleRequestBeginTime(), '\DateTime', 'date-time'));
        }
        if($request->getSettleRequestEndTime() != null){
            $internalRequest->addParameter('settleRequestEndTime', ObjectSerializer::sanitizeForSerialization($request->getSettleRequestEndTime(), '\DateTime', 'date-time'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
RecordsQueryRequestMarshaller::__init();
