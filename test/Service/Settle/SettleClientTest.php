<?php


namespace Yeepay\Yop\Sdk\Service\Settle;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Settle\Model as Model;

class SettleClientTest extends TestCase
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
        self::$client = SettleClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function balanceQueryTest()
    {
        $request = new Model\BalanceQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOperatePeriod("ALL");
        $request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->balanceQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->balanceQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function balance_query_v1_0Test()
    {
        $request = new Model\BalanceQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOperatePeriod("ALL");
        $request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->balance_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->balance_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function fileGetTest()
    {
        $request = new Model\FileGetRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setReceiverMerchantNo("receiverMerchantNo_example");
        $request->setSettleRequestNo("settleRequestNo_example");
        $request->setSettleDate("settleDate_example");
        try{
            $response = self::$client->fileGet($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->fileGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function file_get_v1_0Test()
    {
        $request = new Model\FileGetV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setReceiverMerchantNo("receiverMerchantNo_example");
        $request->setSettleRequestNo("settleRequestNo_example");
        $request->setSettleDate("settleDate_example");
        try{
            $response = self::$client->file_get_v1_0($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->file_get_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function receiptApplyTest()
    {
        $request = new Model\ReceiptApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleReceiptRequestDTO());
        try{
            $response = self::$client->receiptApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->receiptApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function receiptGetTest()
    {
        $request = new Model\ReceiptGetRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setFileId("fileId_example");
        $request->setReceiverMerchantNo("receiverMerchantNo_example");
        try{
            $response = self::$client->receiptGet($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->receiptGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function recordsOrderQueryTest()
    {
        $request = new Model\RecordsOrderQueryRequest();

        $request->setOrderId("orderId_example");
        $request->setRequestId("requestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setBusinessType("businessType_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setSettleMerchantNo("settleMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->recordsOrderQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->recordsOrderQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function recordsQueryTest()
    {
        $request = new Model\RecordsQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setReceiverMerchantNo("receiverMerchantNo_example");
        $request->setSettleRequestNo("settleRequestNo_example");
        $request->setSettleRequestBeginTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setSettleRequestEndTime(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->recordsQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->recordsQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function records_query_v1_0Test()
    {
        $request = new Model\RecordsQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setReceiverMerchantNo("receiverMerchantNo_example");
        $request->setSettleRequestNo("settleRequestNo_example");
        $request->setSettleRequestBeginTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setSettleRequestEndTime(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->records_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->records_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function selfSettleApplyTest()
    {
        $request = new Model\SelfSettleApplyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setSettleRequestNo("settleRequestNo_example");
        $request->setOperatePeriod("operatePeriod_example");
        $request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("notifyUrl_example");
        $request->setBankRemark("bankRemark_example");
        try{
            $response = self::$client->selfSettleApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->selfSettleApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function self_settle_apply_v1_0Test()
    {
        $request = new Model\SelfSettleApplyV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setSettleRequestNo("settleRequestNo_example");
        $request->setOperatePeriod("operatePeriod_example");
        $request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("notifyUrl_example");
        $request->setBankRemark("bankRemark_example");
        try{
            $response = self::$client->self_settle_apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->self_settle_apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function settleCardAddTest()
    {
        $request = new Model\SettleCardAddRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setBankCardType("bankCardType_example");
        $request->setBankCode("bankCode_example");
        $request->setBrancgCode("brancgCode_example");
        $request->setDefaultSettleCard(true);
        try{
            $response = self::$client->settleCardAdd($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settleCardAdd: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function settleCardModifyTest()
    {
        $request = new Model\SettleCardModifyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setBankCardType("bankCardType_example");
        $request->setBankCode("bankCode_example");
        $request->setBrancgCode("brancgCode_example");
        $request->setDefaultSettleCard(true);
        try{
            $response = self::$client->settleCardModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settleCardModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function settleWayModifyRatioTest()
    {
        $request = new Model\SettleWayModifyRatioRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\ModifySettleWayRatioRequestDto());
        try{
            $response = self::$client->settleWayModifyRatio($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settleWayModifyRatio: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function settleWayQueryTest()
    {
        $request = new Model\SettleWayQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->settleWayQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settleWayQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function settle_card_add_v1_0Test()
    {
        $request = new Model\SettleCardAddV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setBankCardType("bankCardType_example");
        $request->setBankCode("bankCode_example");
        $request->setBrancgCode("brancgCode_example");
        $request->setDefaultSettleCard(true);
        try{
            $response = self::$client->settle_card_add_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_card_add_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function settle_card_modify_v1_0Test()
    {
        $request = new Model\SettleCardModifyV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setBankCardType("bankCardType_example");
        $request->setBankCode("bankCode_example");
        $request->setBrancgCode("brancgCode_example");
        $request->setDefaultSettleCard(true);
        try{
            $response = self::$client->settle_card_modify_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_card_modify_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function settle_receipt_apply_v1_0Test()
    {
        $request = new Model\SettleReceiptApplyV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleReceiptRequestDTO());
        try{
            $response = self::$client->settle_receipt_apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_receipt_apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function settle_receipt_get_v1_0Test()
    {
        $request = new Model\SettleReceiptGetV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setFileId("fileId_example");
        $request->setReceiverMerchantNo("receiverMerchantNo_example");
        try{
            $response = self::$client->settle_receipt_get_v1_0($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_receipt_get_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function settle_recod_order_query_v1_0Test()
    {
        $request = new Model\SettleRecodOrderQueryV10Request();

        $request->setOrderId("orderId_example");
        $request->setRequestId("requestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setBusinessType("businessType_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setSettleMerchantNo("settleMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->settle_recod_order_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_recod_order_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function settle_way_modify_ratio_v1_0Test()
    {
        $request = new Model\SettleWayModifyRatioV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\ModifySettleWayRatioRequestDto());
        try{
            $response = self::$client->settle_way_modify_ratio_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_way_modify_ratio_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function settle_way_query_v1_0Test()
    {
        $request = new Model\SettleWayQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->settle_way_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_way_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
}
