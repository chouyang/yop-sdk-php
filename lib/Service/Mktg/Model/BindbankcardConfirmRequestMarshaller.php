<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BindbankcardConfirmRequestMarshaller implements RequestMarshaller
{
    /**
     * @var BindbankcardConfirmRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindbankcardConfirmRequestMarshaller();
    }

    /**
     * @return BindbankcardConfirmRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Mktg';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/mktg/bindbankcard/confirm';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BindbankcardConfirmRequest $request
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
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getBindOrderId() != null){
            $internalRequest->addParameter('bindOrderId', ObjectSerializer::sanitizeForSerialization($request->getBindOrderId(), 'string'));
        }
        if($request->getUniqueBindNo() != null){
            $internalRequest->addParameter('uniqueBindNo', ObjectSerializer::sanitizeForSerialization($request->getUniqueBindNo(), 'string'));
        }
        if($request->getSmsCode() != null){
            $internalRequest->addParameter('smsCode', ObjectSerializer::sanitizeForSerialization($request->getSmsCode(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BindbankcardConfirmRequestMarshaller::__init();
