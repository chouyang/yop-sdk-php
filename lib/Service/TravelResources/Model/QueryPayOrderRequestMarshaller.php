<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class QueryPayOrderRequestMarshaller implements RequestMarshaller
{
    /**
     * @var QueryPayOrderRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryPayOrderRequestMarshaller();
    }

    /**
     * @return QueryPayOrderRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'TravelResources';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/travel-resources/query-pay-order';

    /**
     * @var string
     */
    private $contentType = 'application/json';


    /**
     * @param QueryPayOrderRequest $request
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
        $content = (string)$request->getBody();
        $internalRequest->setContent($content);
        $internalRequest->addHeader(Headers::CONTENT_LENGTH, strlen($content));
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
QueryPayOrderRequestMarshaller::__init();
