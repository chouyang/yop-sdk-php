<?php


namespace Yeepay\Yop\Sdk\Service\Mktg;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Mktg\Model as Model;

class MktgClientTest extends TestCase
{


    private static $client;

    public static function setUpBeforeClass()
    {
        $data = \GuzzleHttp\json_decode('{"app_key":"app_Fe51qCyZWcEnDMtK","aes_secret_key":"ytrbMFjRqLpLgY58J6LN9Q==","server_root":"http://ycetest.yeepay.com:30228/yop-center","yos_server_root":"http://ycetest.yeepay.com:30228/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4g7dPL+CBeuzFmARI2GFjZpKODUROaMG+E6wdNfv5lhPqC3jjTIeljWU8AiruZLGRhl92QWcTjb3XonjaV6k9rf9adQtyv2FLS7bl2Vz2WgjJ0FJ5/qMaoXaT+oAgWFk2GypyvoIZsscsGpUStm6BxpWZpbPrGJR0N95un/130cQI9VCmfvgkkCaXt7TU1BbiYzkc8MDpLScGm/GUCB2wB5PclvOxvf5BR/zNVYywTEFmw2Jo0hIPPSWB5Yyf2mx950Fx8da56co/FxLdMwkDOO51Qg3fbaExQDVzTm8Odi++wVJEP1y34tlmpwFUVbAKIEbyyELmi/2S6GG0j9vNwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":10000,"read_timeout":30000,"max_conn_total":2000,"max_conn_per_route":1000}}', true);
        try {
            $appSdkConfig = new AppSdkConfig($data);
        } catch (YopClientException $e) {
            throw $e;
        }
        self::$client = MktgClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function accountbalanceQueryTest()
    {
        $request = new Model\AccountbalanceQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setBankCardNo("bankCardNo_example");
        try{
            $response = self::$client->accountbalanceQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->accountbalanceQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function accountcloseApplyTest()
    {
        $request = new Model\AccountcloseApplyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setCloseOrderId("closeOrderId_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->accountcloseApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->accountcloseApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function accountcloseConfirmTest()
    {
        $request = new Model\AccountcloseConfirmRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setCloseOrderId("closeOrderId_example");
        $request->setUniqueCloseNo("uniqueCloseNo_example");
        $request->setSmsCode("smsCode_example");
        try{
            $response = self::$client->accountcloseConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->accountcloseConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function accountcloseQueryTest()
    {
        $request = new Model\AccountcloseQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setCloseOrderId("closeOrderId_example");
        $request->setUniqueCloseNo("uniqueCloseNo_example");
        try{
            $response = self::$client->accountcloseQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->accountcloseQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function accountdetailsPageQueryTest()
    {
        $request = new Model\AccountdetailsPageQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setTrxType("trxType_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setStartDate("startDate_example");
        $request->setEndDate("endDate_example");
        $request->setPageNo(56);
        $request->setPageSize(56);
        try{
            $response = self::$client->accountdetailsPageQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->accountdetailsPageQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function accountstatusQueryTest()
    {
        $request = new Model\AccountstatusQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setBankCardNo("bankCardNo_example");
        try{
            $response = self::$client->accountstatusQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->accountstatusQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindbankcardApplyTest()
    {
        $request = new Model\BindbankcardApplyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setBindOrderId("bindOrderId_example");
        $request->setMarketingNo("marketingNo_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setBindBankCardNo("bindBankCardNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->bindbankcardApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->bindbankcardApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindbankcardConfirmTest()
    {
        $request = new Model\BindbankcardConfirmRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setBindOrderId("bindOrderId_example");
        $request->setUniqueBindNo("uniqueBindNo_example");
        $request->setSmsCode("smsCode_example");
        try{
            $response = self::$client->bindbankcardConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->bindbankcardConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindbankcardQueryTest()
    {
        $request = new Model\BindbankcardQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setBindOrderId("bindOrderId_example");
        $request->setUniqueBindNo("uniqueBindNo_example");
        try{
            $response = self::$client->bindbankcardQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->bindbankcardQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function openuserApplyTest()
    {
        $request = new Model\OpenuserApplyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setOpenOrderId("openOrderId_example");
        $request->setMarketingNo("marketingNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setProfession("profession_example");
        $request->setSex("sex_example");
        $request->setBankCode("bankCode_example");
        $request->setAccountLevel("accountLevel_example");
        $request->setUserName("userName_example");
        $request->setIdCardType("idCardType_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setIdAddress("idAddress_example");
        $request->setIdStartDate("idStartDate_example");
        $request->setIdEndDate("idEndDate_example");
        $request->setIdIssuingAuthority("idIssuingAuthority_example");
        $request->setNationality("nationality_example");
        $request->setMobile("mobile_example");
        $request->setBindBankCardNo("bindBankCardNo_example");
        $request->setCity("city_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->openuserApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->openuserApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function openuserQueryTest()
    {
        $request = new Model\OpenuserQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setOpenOrderId("openOrderId_example");
        $request->setUniqueOpenNo("uniqueOpenNo_example");
        try{
            $response = self::$client->openuserQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->openuserQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function smscodeSendTest()
    {
        $request = new Model\SmscodeSendRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderType("orderType_example");
        try{
            $response = self::$client->smscodeSend($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->smscodeSend: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function tradeorderApplyTest()
    {
        $request = new Model\TradeorderApplyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setTradeOrderId("tradeOrderId_example");
        $request->setMarketingNo("marketingNo_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setTrxType("trxType_example");
        $request->setAmount(1.2);
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->tradeorderApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->tradeorderApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function tradeorderConfirmTest()
    {
        $request = new Model\TradeorderConfirmRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setTradeOrderId("tradeOrderId_example");
        $request->setUniqueTradeNo("uniqueTradeNo_example");
        $request->setTrxType("trxType_example");
        $request->setSmsCode("smsCode_example");
        try{
            $response = self::$client->tradeorderConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->tradeorderConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function tradeorderQueryTest()
    {
        $request = new Model\TradeorderQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setTrxType("trxType_example");
        $request->setTradeOrderId("tradeOrderId_example");
        $request->setUniqueTradeNo("uniqueTradeNo_example");
        try{
            $response = self::$client->tradeorderQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->tradeorderQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function useractivateApplyTest()
    {
        $request = new Model\UseractivateApplyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setActivateOrderId("activateOrderId_example");
        $request->setMarketingNo("marketingNo_example");
        $request->setBankCardNo("bankCardNo_example");
        try{
            $response = self::$client->useractivateApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->useractivateApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function useractivateConfirmTest()
    {
        $request = new Model\UseractivateConfirmRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setActivateOrderId("activateOrderId_example");
        $request->setUniqueActivateNo("uniqueActivateNo_example");
        $request->setSmsCode("smsCode_example");
        try{
            $response = self::$client->useractivateConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->useractivateConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function useractivateQueryTest()
    {
        $request = new Model\UseractivateQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setActivateOrderId("activateOrderId_example");
        $request->setUniqueActivateNo("uniqueActivateNo_example");
        try{
            $response = self::$client->useractivateQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->useractivateQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function userinfoModifyTest()
    {
        $request = new Model\UserinfoModifyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setInfoOrderId("infoOrderId_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setUserName("userName_example");
        $request->setMobile("mobile_example");
        $request->setIdCardType("idCardType_example");
        $request->setIdCardNo("idCardNo_example");
        try{
            $response = self::$client->userinfoModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->userinfoModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function useropenQueryTest()
    {
        $request = new Model\UseropenQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setMarketingNo("marketingNo_example");
        $request->setBankCode("bankCode_example");
        $request->setIdCardType("idCardType_example");
        $request->setIdCardNo("idCardNo_example");
        try{
            $response = self::$client->useropenQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MktgClient->useropenQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
}
