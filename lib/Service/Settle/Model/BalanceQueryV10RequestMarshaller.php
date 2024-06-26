<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BalanceQueryV10RequestMarshaller implements RequestMarshaller
{
    /**
     * @var BalanceQueryV10RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceQueryV10RequestMarshaller();
    }

    /**
     * @return BalanceQueryV10RequestMarshaller
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
    private $resourcePath = '/rest/v1.0/settle/balance/query';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BalanceQueryV10Request $request
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
        if($request->getOperatePeriod() != null){
            $internalRequest->addParameter('operatePeriod', ObjectSerializer::sanitizeForSerialization($request->getOperatePeriod(), 'string'));
        }
        if($request->getEndTime() != null){
            $internalRequest->addParameter('endTime', ObjectSerializer::sanitizeForSerialization($request->getEndTime(), '\DateTime', 'date-time'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BalanceQueryV10RequestMarshaller::__init();
