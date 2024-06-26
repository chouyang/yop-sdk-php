<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Aggpay\Model as Model;

class AggpayClientTest extends TestCase
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
        self::$client = AggpayClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function agg_attach_report_v1_0Test()
    {
        $request = new Model\AggAttachReportV10Request();

        $request->setChannel("channel_example");
        $request->setMainChannelNo("mainChannelNo_example");
        $request->setMainReportMerchantNo("mainReportMerchantNo_example");
        $request->setMerchantNoList("10040010000,10040010000");
        $request->setAuthFileName("authFileName_example");
        $request->setAuthFileUrl("authFileUrl_example");
        $request->setGroupName("groupName_example");
        $request->setRequestReason("requestReason_example");
        $request->setPayWayList("payWayList_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->agg_attach_report_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_attach_report_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function agg_close_order_v1_0Test()
    {
        $request = new Model\AggCloseOrderV10Request();

        $request->setOrderId("orderId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->agg_close_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_close_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function agg_report_query_v1_0Test()
    {
        $request = new Model\AggReportQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setChannelNo("channelNo_example");
        $request->setPromotionType("promotionType_example");
        try{
            $response = self::$client->agg_report_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_report_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function agg_report_update_v1_0Test()
    {
        $request = new Model\AggReportUpdateV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setChannelNo("channelNo_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setPromotionType("promotionType_example");
        $request->setReportMerchantNo("reportMerchantNo_example");
        $request->setReportMerchantName("reportMerchantName_example");
        $request->setReportMerchantAlias("reportMerchantAlias_example");
        $request->setServiceTel("serviceTel_example");
        $request->setContactMobile("contactMobile_example");
        $request->setContactEmail("contactEmail_example");
        $request->setContactPhone("contactPhone_example");
        $request->setContactName("contactName_example");
        $request->setContactType("contactType_example");
        try{
            $response = self::$client->agg_report_update_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_report_update_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function closeOrderTest()
    {
        $request = new Model\CloseOrderRequest();

        $request->setOrderId("orderId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->closeOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->closeOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function complaintWechatDetailsTest()
    {
        $request = new Model\ComplaintWechatDetailsRequest();

        $request->setComplaintNo("complaintNo_example");
        $request->setComplaintSource("complaintSource_example");
        $request->setMerchantOrderNo("merchantOrderNo_example");
        try{
            $response = self::$client->complaintWechatDetails($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaintWechatDetails: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function complaintWechatDownloadPicTest()
    {
        $request = new Model\ComplaintWechatDownloadPicRequest();

        $request->setComplaintNo("complaintNo_example");
        $request->setFileType("fileType_example");
        $request->setPictureUrl("pictureUrl_example");
        try{
            $response = self::$client->complaintWechatDownloadPic($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaintWechatDownloadPic: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function complaintWechatFeedbackTest()
    {
        $request = new Model\ComplaintWechatFeedbackRequest();

        $request->setComplaintNo("200201820200101080076610000");
        $request->setFeedbackContent("已与用户沟通解决");
        $request->setImageList("[\"https://qpic.cn/xx1\",\"https://qpic.cn/xxx2\"]");
        $request->setFeedbackType("GENERAL");
        $request->setComplaintSource("complaintSource_example");
        $request->setOperateType("operateType_example");
        try{
            $response = self::$client->complaintWechatFeedback($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaintWechatFeedback: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function complaintWechatListTest()
    {
        $request = new Model\ComplaintWechatListRequest();

        $request->setStartTime("2022-05-01");
        $request->setEndTime("2022-06-01");
        $request->setMerchantOrderNo("20220906154617947762222");
        $request->setWechatOrderNo("4200000404201909069117582536");
        $request->setMerchantNo("10083213321");
        $request->setComplaintSource("complaintSource_example");
        $request->setPage(56);
        $request->setLimit(56);
        try{
            $response = self::$client->complaintWechatList($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaintWechatList: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function complaintWechatNegotiationHistoryTest()
    {
        $request = new Model\ComplaintWechatNegotiationHistoryRequest();

        $request->setComplaintNo("200201820200101080076610000");
        try{
            $response = self::$client->complaintWechatNegotiationHistory($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaintWechatNegotiationHistory: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function complaintWechatSuccessTest()
    {
        $request = new Model\ComplaintWechatSuccessRequest();

        $request->setComplaintNo("complaintNo_example");
        try{
            $response = self::$client->complaintWechatSuccess($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaintWechatSuccess: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function creditScoreCancelTest()
    {
        $request = new Model\CreditScoreCancelRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setReason("reason_example");
        try{
            $response = self::$client->creditScoreCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScoreCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function creditScoreCreateTest()
    {
        $request = new Model\CreditScoreCreateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setServiceId("serviceId_example");
        $request->setPayWay("payWay_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setAppId("appId_example");
        $request->setUserId("userId_example");
        $request->setServiceSource("serviceSource_example");
        $request->setGoodsName("goodsName_example");
        $request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
        $request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
        $request->setLocationInfo("{\"start_location\":\"嗨客时尚主题展餐厅\",\"end_location\":\"嗨客时尚主题展餐厅\"}");
        $request->setRiskFundInfo("{\"name\":\"DEPOSIT\",\"amount\":10000,\"description\":\"就餐的预估费用\"}");
        $request->setTimeRange("{\"start_time\":\"20091225091010\",\"end_time\":\"20091225121010\",\"start_time_remark\":\"备注1\",\"end_time_remark\":\"备注2\"}");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->creditScoreCreate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScoreCreate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function creditScoreModifyTest()
    {
        $request = new Model\CreditScoreModifyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setTotalAmount("totalAmount_example");
        $request->setReason("reason_example");
        $request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
        $request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
        try{
            $response = self::$client->creditScoreModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScoreModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function creditScoreQueryTest()
    {
        $request = new Model\CreditScoreQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        try{
            $response = self::$client->creditScoreQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScoreQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function creditScoreSyncTest()
    {
        $request = new Model\CreditScoreSyncRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setPaidTime("paidTime_example");
        $request->setType("ORDER_PAID");
        try{
            $response = self::$client->creditScoreSync($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScoreSync: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function creditScorecompleteTest()
    {
        $request = new Model\CreditScorecompleteRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
        $request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
        $request->setRiskFundInfo("{\"name\":\"DEPOSIT\",\"amount\":10000,\"description\":\"就餐的预估费用\"}");
        $request->setTimeRange("{\"start_time\":\"20091225091010\",\"end_time\":\"20091225121010\",\"start_time_remark\":\"备注1\",\"end_time_remark\":\"备注2\"}");
        $request->setLocationInfo("{\"start_location\":\"嗨客时尚主题展餐厅\",\"end_location\":\"嗨客时尚主题展餐厅\"}");
        $request->setTotalAmount("totalAmount_example");
        $request->setCompleteTime("completeTime_example");
        try{
            $response = self::$client->creditScorecomplete($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScorecomplete: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function creditscoreCancelTest()
    {
        $request = new Model\CreditscoreCancelRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setReason("reason_example");
        try{
            $response = self::$client->creditscoreCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function creditscoreCompleteTest()
    {
        $request = new Model\CreditscoreCompleteRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
        $request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
        $request->setRiskFundInfo("{\"name\":\"DEPOSIT\",\"amount\":10000,\"description\":\"就餐的预估费用\"}");
        $request->setTimeRange("{\"start_time\":\"20091225091010\",\"end_time\":\"20091225121010\",\"start_time_remark\":\"备注1\",\"end_time_remark\":\"备注2\"}");
        $request->setLocationInfo("{\"start_location\":\"嗨客时尚主题展餐厅\",\"end_location\":\"嗨客时尚主题展餐厅\"}");
        $request->setTotalAmount("totalAmount_example");
        $request->setCompleteTime("completeTime_example");
        try{
            $response = self::$client->creditscoreComplete($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreComplete: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function creditscoreCreateTest()
    {
        $request = new Model\CreditscoreCreateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setServiceId("serviceId_example");
        $request->setPayWay("payWay_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setAppId("appId_example");
        $request->setUserId("userId_example");
        $request->setServiceSource("serviceSource_example");
        $request->setGoodsName("goodsName_example");
        $request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
        $request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
        $request->setLocationInfo("{\"start_location\":\"嗨客时尚主题展餐厅\",\"end_location\":\"嗨客时尚主题展餐厅\"}");
        $request->setRiskFundInfo("{\"name\":\"DEPOSIT\",\"amount\":10000,\"description\":\"就餐的预估费用\"}");
        $request->setTimeRange("{\"start_time\":\"20091225091010\",\"end_time\":\"20091225121010\",\"start_time_remark\":\"备注1\",\"end_time_remark\":\"备注2\"}");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->creditscoreCreate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreCreate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function creditscoreModifyTest()
    {
        $request = new Model\CreditscoreModifyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setTotalAmount("totalAmount_example");
        $request->setReason("reason_example");
        $request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
        $request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
        try{
            $response = self::$client->creditscoreModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function creditscoreQueryTest()
    {
        $request = new Model\CreditscoreQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        try{
            $response = self::$client->creditscoreQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function creditscoreSyncTest()
    {
        $request = new Model\CreditscoreSyncRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setPaidTime("paidTime_example");
        $request->setType("ORDER_PAID");
        try{
            $response = self::$client->creditscoreSync($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreSync: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function getAuthInfoTest()
    {
        $request = new Model\GetAuthInfoRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRawData("rawData_example");
        $request->setStoreId("storeId_example");
        $request->setStoreName("storeName_example");
        $request->setDeviceId("deviceId_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setAttach("attach_example");
        $request->setAppId("appId_example");
        try{
            $response = self::$client->getAuthInfo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->getAuthInfo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function miniprogramDetailsTest()
    {
        $request = new Model\MiniprogramDetailsRequest();

        $request->setComplaintNo("complaintNo_example");
        try{
            $response = self::$client->miniprogramDetails($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->miniprogramDetails: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function miniprogramFeedbackTest()
    {
        $request = new Model\MiniprogramFeedbackRequest();

        $request->setFeedbackContent("已与用户沟通解决");
        $request->setOperateType("MERCHANT_RESPOND_COMPLAINT");
        $request->setAcceptReturn(" 1");
        $request->setReturnId("121212");
        $request->setBussiHandle(1);
        $request->setType("image");
        $request->setImageList("[\"https://qpic.cn/xx1\",\"https://qpic.cn/xxx2\"]");
        $request->setComplaintNo("complaintNo_example");
        try{
            $response = self::$client->miniprogramFeedback($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->miniprogramFeedback: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function miniprogramNegotiationHistoryTest()
    {
        $request = new Model\MiniprogramNegotiationHistoryRequest();

        $request->setComplaintNo(" adasdasdad");
        try{
            $response = self::$client->miniprogramNegotiationHistory($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->miniprogramNegotiationHistory: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function payTest()
    {
        $request = new Model\PayRequest();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040054321");
        $request->setOrderId("orderId12345");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime("2024-06-20 16:01:23");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("REAL_TIME");
        $request->setPayWay("MERCHANT_SCAN");
        $request->setChannel("WECHAT");
        $request->setScene("OFFLINE");
        $request->setAuthCode("authCode123");
        $request->setAppId("appId12345");
        $request->setUserIp("123.123.123.123");
        $request->setTerminalId("00000000");
        $request->setTerminalSceneInfo("{\"storeId\":\"门店id\",\"storeName\":\"门店名称\",\"operatorId\":\"商户操作员编号\",\"alipayStoreId\":\"支付宝的店铺编号\",\"areaCode\":\"门店行政区划码\",\"address\":\"门店详细地址\"}");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\",\"isEnterprisePay\":\"N\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
        $request->setLimitCredit("N");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setUniqueOrderNo("1012202101070000001989946571");
        $request->setCsUrl("csUrl_example");
        $request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
        $request->setBankCode("BOC");
        $request->setBusinessInfo("businessInfo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setProductInfo("[{\"id\":\"1234\"}]");
        $request->setDivideDetail("divideDetail_example");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
        $request->setPayMedium("payMedium_example");
        $request->setTerminalInfo("terminalInfo_example");
        try{
            $response = self::$client->pay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->pay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function payLinkTest()
    {
        $request = new Model\PayLinkRequest();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040054321");
        $request->setOrderId("OrderId12345");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime("2024-06-20 16:01:23");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("REAL_TIME");
        $request->setScene("OFFLINE");
        $request->setAppId("appId12345");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\",\"isEnterprisePay\":\"N\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
        $request->setLimitCredit("N");
        $request->setCsUrl("csUrl_example");
        $request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
        $request->setBusinessInfo("businessInfo_example");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setProductInfo("[{\"id\":\"1234\"}]");
        $request->setDivideDetail("divideDetail_example");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
        try{
            $response = self::$client->payLink($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->payLink: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function prePayTest()
    {
        $request = new Model\PrePayRequest();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040054321");
        $request->setOrderId("orderId12345");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime("2024-06-20 16:01:23");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setRedirectUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("REAL_TIME");
        $request->setPayWay("USER_SCAN");
        $request->setChannel("ALIPAY");
        $request->setScene("OFFLINE");
        $request->setAppId("appId12345");
        $request->setUserId("userId12345");
        $request->setUserIp("123.123.123.123");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
        $request->setLimitCredit("N");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setUniqueOrderNo("1012202101070000001989946571");
        $request->setCsUrl("csUrl_example");
        $request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
        $request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
        $request->setBankCode("BOC");
        $request->setBusinessInfo("businessInfo_example");
        $request->setUserAuthCode("userAuthCode_example");
        $request->setChannelActivityInfo("channelActivityInfo_example");
        $request->setTerminalId("terminalId_example");
        $request->setTerminalSceneInfo("{\"storeId\":\"门店id\",\"storeName\":\"门店名称\",\"operatorId\":\"商户操作员编号\",\"alipayStoreId\":\"支付宝的店铺编号\",\"areaCode\":\"门店行政区划码\",\"address\":\"门店详细地址\"}");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setTerminalInfo("{\"shopName\":\"网点名称\",\"shopCustomerNumber\":\"网点编号\"}");
        $request->setProductInfo("[{\"id\":\"1234\"}]");
        $request->setDivideDetail("divideDetail_example");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
        $request->setAgreementId("agreementId_example");
        $request->setCreditOrderId("creditOrderId_example");
        try{
            $response = self::$client->prePay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->prePay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function queryComplaintNegotiationHistoryTest()
    {
        $request = new Model\QueryComplaintNegotiationHistoryRequest();

        $request->setComplaintNo(" adasdasdad");
        try{
            $response = self::$client->queryComplaintNegotiationHistory($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->queryComplaintNegotiationHistory: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function queryMiniProgramDetailTest()
    {
        $request = new Model\QueryMiniProgramDetailRequest();

        $request->setComplaintNo("complaintNo_example");
        try{
            $response = self::$client->queryMiniProgramDetail($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->queryMiniProgramDetail: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function queryUseridTest()
    {
        $request = new Model\QueryUseridRequest();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040054321");
        $request->setAppId("appid12345");
        $request->setAuthCode("authCode123");
        $request->setChannel("WECHAT");
        try{
            $response = self::$client->queryUserid($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->queryUserid: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function reportAttachTest()
    {
        $request = new Model\ReportAttachRequest();

        $request->setChannel("channel_example");
        $request->setMainChannelNo("mainChannelNo_example");
        $request->setMainReportMerchantNo("mainReportMerchantNo_example");
        $request->setMerchantNoList("10040010000,10040010000");
        $request->setAuthFileName("authFileName_example");
        $request->setAuthFileUrl("authFileUrl_example");
        $request->setGroupName("groupName_example");
        $request->setRequestReason("requestReason_example");
        $request->setPayWayList("payWayList_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->reportAttach($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->reportAttach: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function reportQueryTest()
    {
        $request = new Model\ReportQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setChannelNo("channelNo_example");
        $request->setPromotionType("promotionType_example");
        try{
            $response = self::$client->reportQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->reportQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function reportUpdateTest()
    {
        $request = new Model\ReportUpdateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setChannelNo("channelNo_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setPromotionType("promotionType_example");
        $request->setReportMerchantNo("reportMerchantNo_example");
        $request->setReportMerchantName("reportMerchantName_example");
        $request->setReportMerchantAlias("reportMerchantAlias_example");
        $request->setServiceTel("serviceTel_example");
        $request->setContactMobile("contactMobile_example");
        $request->setContactEmail("contactEmail_example");
        $request->setContactPhone("contactPhone_example");
        $request->setContactName("contactName_example");
        $request->setContactType("contactType_example");
        try{
            $response = self::$client->reportUpdate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->reportUpdate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function shareTokenGenerateTest()
    {
        $request = new Model\ShareTokenGenerateRequest();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040054321");
        $request->setOrderId("orderId12345");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime("2024-06-20 16:01:23");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("goodsName_example");
        $request->setFundProcessType("REAL_TIME");
        $request->setLimitCredit("N");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setCsUrl("csUrl_example");
        $request->setBusinessInfo("businessInfo_example");
        $request->setProductInfo("[{\"id\":\"1234\"}]");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setDivideDetail("divideDetail_example");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setFeeSubsidyInfo("feeSubsidyInfo_example");
        $request->setExternalUserId("externalUserId_example");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("identityInfo_example");
        $request->setYpPromotionInfo("ypPromotionInfo_example");
        $request->setChannelOperationInfo("channelOperationInfo_example");
        $request->setShareTokenExpiredSeconds(56);
        $request->setScene("scene_example");
        try{
            $response = self::$client->shareTokenGenerate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->shareTokenGenerate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function shareTokenMarketQueryTest()
    {
        $request = new Model\ShareTokenMarketQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount(1.2);
        $request->setExternalUserId("externalUserId_example");
        $request->setScene("scene_example");
        try{
            $response = self::$client->shareTokenMarketQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->shareTokenMarketQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function signTest()
    {
        $request = new Model\SignRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setPayWay("payWay_example");
        $request->setChannel("channel_example");
        $request->setSignSource("signSource_example");
        $request->setAppId("appId_example");
        $request->setPlainId("plainId_example");
        $request->setAgreementId("agreementId_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setContractDisplayAccount("contractDisplayAccount_example");
        $request->setReturnInfo("returnInfo_example");
        $request->setExpireTime("2024-06-20 16:01:23");
        $request->setInvokeScene("invokeScene_example");
        try{
            $response = self::$client->sign($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->sign: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function signQueryTest()
    {
        $request = new Model\SignQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAgreementId("agreementId_example");
        try{
            $response = self::$client->signQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->signQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function tutelagePrePayTest()
    {
        $request = new Model\TutelagePrePayRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount(1.2);
        $request->setExpiredTime("2024-06-20 16:01:23");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("REAL_TIME");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setPayWay("SDK_PAY");
        $request->setChannel("WECHAT");
        $request->setScene("OFFLINE");
        $request->setUserIp("123.123.123.123");
        $request->setLimitCredit("N");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setCsUrl("csUrl_example");
        $request->setRedirectUrl("redirectUrl_example");
        $request->setBusinessInfo("businessInfo_example");
        $request->setProductInfo("[{\"id\":\"1234\"}]");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setDivideDetail("divideDetail_example");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setReturnSchema("returnSchema_example");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"unionProviderId\":\"111112222\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
        $request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
        $request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
        $request->setChannelActivityInfo("{\"food_order_type\":\"qr_order\"}");
        $request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
        try{
            $response = self::$client->tutelagePrePay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->tutelagePrePay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function unsignTest()
    {
        $request = new Model\UnsignRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAgreementId("agreementId_example");
        $request->setUnSignRemark("unSignRemark_example");
        try{
            $response = self::$client->unsign($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->unsign: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function violationWechatChannelTest()
    {
        $request = new Model\ViolationWechatChannelRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setBeginTime("2024-06-20 16:01:23");
        $request->setEndTime("2024-06-20 16:01:23");
        try{
            $response = self::$client->violationWechatChannel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->violationWechatChannel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function wechatComplaintFeedbackTest()
    {
        $request = new Model\WechatComplaintFeedbackRequest();

        $request->setFeedbackContent("已与用户沟通解决");
        $request->setOperateType("MERCHANT_RESPOND_COMPLAINT");
        $request->setAcceptReturn(" 1");
        $request->setReturnId("121212");
        $request->setBussiHandle(1);
        $request->setType("image");
        $request->setImageList("[\"https://qpic.cn/xx1\",\"https://qpic.cn/xxx2\"]");
        $request->setComplaintNo("complaintNo_example");
        try{
            $response = self::$client->wechatComplaintFeedback($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatComplaintFeedback: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function wechatConfigAddTest()
    {
        $request = new Model\WechatConfigAddRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigRequestDTOParam());
        try{
            $response = self::$client->wechatConfigAdd($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatConfigAdd: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function wechatConfigAddV2Test()
    {
        $request = new Model\WechatConfigAddV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setTradeAuthDirList("[\"http://www.yeepay.com/\",\"http://www.yeepay.com/\"]");
        $request->setAppIdList("[{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"OFFICIAL_ACCOUNT\",\"subscribeAppId\":\"subscribeAppId\"},{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"MINI_PROGRAM\",\"subscribeAppId\":\"subscribeAppId\"}]");
        $request->setReportMerchantNo("reportMerchantNo_example");
        try{
            $response = self::$client->wechatConfigAddV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatConfigAddV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function wechatConfigQueryTest()
    {
        $request = new Model\WechatConfigQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAppIdType("appIdType_example");
        try{
            $response = self::$client->wechatConfigQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatConfigQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function wechatConfigQueryV2Test()
    {
        $request = new Model\WechatConfigQueryV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAppIdType("appIdType_example");
        $request->setReportMerchantNo("reportMerchantNo_example");
        try{
            $response = self::$client->wechatConfigQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatConfigQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
}
