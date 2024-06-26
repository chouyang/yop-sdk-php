<?php


namespace Yeepay\Yop\Sdk\Service\Reprocess;


use Yeepay\Yop\Sdk\Auth\AuthorityReqRegistryImpl;
use Yeepay\Yop\Sdk\Auth\AuthorizationReqRegistry;
use Yeepay\Yop\Sdk\Auth\AuthorizationReqSupport;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Client\Support\ClientParamsSupport;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Config\AppSdkConfigProvider;
use Yeepay\Yop\Sdk\Config\DefaultAppSdkConfigProvider;
use Yeepay\Yop\Sdk\Exception\YopClientException;

class ReprocessClientBuilder
{
    /**
     * @var AuthorizationReqRegistry
     */
    private static $authorizationReqRegistry;

    public static function __init()
    {
        self::$authorizationReqRegistry = new AuthorityReqRegistryImpl();
        self::$authorizationReqRegistry->register('migrateBankOrder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('migrateBankQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('migrate_bank_order_v1_0', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('migrate_bank_query_v1_0', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
    }

    /**
     * @var ClientParams
     */
    private $clientParams;

    /**
     * ReprocessClientBuilder constructor.
     * @param ClientParams $clientParams
     */
    public function __construct(ClientParams $clientParams)
    {
        $this->clientParams = $clientParams;
    }

    public function build()
    {
        return new ReprocessClient($this->clientParams);
    }

    /**
     * @param $config AppSdkConfig|array|AppSdkConfigProvider
     * @return ReprocessClientBuilder
     * @throws YopClientException
     */
    public static function builder($config)
    {
        $appSdkConfigProvider = null;
        if ($config instanceof AppSdkConfigProvider) {
            $appSdkConfigProvider = $config;
        } else {
            $appSdkConfigProvider = new DefaultAppSdkConfigProvider($config);
        }
        $clientParams = ClientParamsSupport::generateClientParams($appSdkConfigProvider);
        $clientParams->setAuthorizationReqRegistry(self::$authorizationReqRegistry);
        return new ReprocessClientBuilder($clientParams);
    }

}
ReprocessClientBuilder::__init();
