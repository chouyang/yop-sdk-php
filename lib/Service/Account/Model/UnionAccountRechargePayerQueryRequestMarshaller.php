<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class UnionAccountRechargePayerQueryRequestMarshaller implements RequestMarshaller
{
    /**
     * @var UnionAccountRechargePayerQueryRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountRechargePayerQueryRequestMarshaller();
    }

    /**
     * @return UnionAccountRechargePayerQueryRequestMarshaller
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
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/account/recharge/payer-query';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param UnionAccountRechargePayerQueryRequest $request
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
        if($request->getIdentityType() != null){
            $internalRequest->addParameter('identityType', ObjectSerializer::sanitizeForSerialization($request->getIdentityType(), 'string', 'enum'));
        }
        if($request->getName() != null){
            $internalRequest->addParameter('name', ObjectSerializer::sanitizeForSerialization($request->getName(), 'string'));
        }
        if($request->getCertificateType() != null){
            $internalRequest->addParameter('certificateType', ObjectSerializer::sanitizeForSerialization($request->getCertificateType(), 'string', 'enum'));
        }
        if($request->getCertificateNo() != null){
            $internalRequest->addParameter('certificateNo', ObjectSerializer::sanitizeForSerialization($request->getCertificateNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
UnionAccountRechargePayerQueryRequestMarshaller::__init();
