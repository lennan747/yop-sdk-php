<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Aggpay\Model as Model;

class AggpayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * AggpayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\ComplaintWechatDetailsRequest $request
     * @return Model\ComplaintWechatDetailsResponse
     * @throws YopClientException
     */
    public function complaintWechatDetails(Model\ComplaintWechatDetailsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getComplaintNo() == null) {
            throw new YopClientException("request.complaintNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatDetailsRequestMarshaller::getInstance(),
            Model\ComplaintWechatDetailsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatFeedbackRequest $request
     * @return Model\ComplaintWechatFeedbackResponse
     * @throws YopClientException
     */
    public function complaintWechatFeedback(Model\ComplaintWechatFeedbackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatFeedbackRequestMarshaller::getInstance(),
            Model\ComplaintWechatFeedbackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatListRequest $request
     * @return Model\ComplaintWechatListResponse
     * @throws YopClientException
     */
    public function complaintWechatList(Model\ComplaintWechatListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getStartTime() == null) {
            throw new YopClientException("request.startTime is required.");
        }
        if ($request->getEndTime() == null) {
            throw new YopClientException("request.endTime is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatListRequestMarshaller::getInstance(),
            Model\ComplaintWechatListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatNegotiationHistoryRequest $request
     * @return Model\ComplaintWechatNegotiationHistoryResponse
     * @throws YopClientException
     */
    public function complaintWechatNegotiationHistory(Model\ComplaintWechatNegotiationHistoryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getComplaintNo() == null) {
            throw new YopClientException("request.complaintNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatNegotiationHistoryRequestMarshaller::getInstance(),
            Model\ComplaintWechatNegotiationHistoryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayRequest $request
     * @return Model\PayResponse
     * @throws YopClientException
     */
    public function pay(Model\PayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayRequestMarshaller::getInstance(),
            Model\PayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayLinkRequest $request
     * @return Model\PayLinkResponse
     * @throws YopClientException
     */
    public function payLink(Model\PayLinkRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayLinkRequestMarshaller::getInstance(),
            Model\PayLinkResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PrePayRequest $request
     * @return Model\PrePayResponse
     * @throws YopClientException
     */
    public function prePay(Model\PrePayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PrePayRequestMarshaller::getInstance(),
            Model\PrePayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryUseridRequest $request
     * @return Model\QueryUseridResponse
     * @throws YopClientException
     */
    public function queryUserid(Model\QueryUseridRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryUseridRequestMarshaller::getInstance(),
            Model\QueryUseridResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ViolationWechatChannelRequest $request
     * @return Model\ViolationWechatChannelResponse
     * @throws YopClientException
     */
    public function violationWechatChannel(Model\ViolationWechatChannelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getBeginTime() == null) {
            throw new YopClientException("request.beginTime is required.");
        }
        if ($request->getEndTime() == null) {
            throw new YopClientException("request.endTime is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ViolationWechatChannelRequestMarshaller::getInstance(),
            Model\ViolationWechatChannelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigAddRequest $request
     * @return Model\WechatConfigAddResponse
     * @throws YopClientException
     */
    public function wechatConfigAdd(Model\WechatConfigAddRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigAddRequestMarshaller::getInstance(),
            Model\WechatConfigAddResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigAddV2Request $request
     * @return Model\WechatConfigAddV2Response
     * @throws YopClientException
     */
    public function wechatConfigAddV2(Model\WechatConfigAddV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigAddV2RequestMarshaller::getInstance(),
            Model\WechatConfigAddV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigQueryRequest $request
     * @return Model\WechatConfigQueryResponse
     * @throws YopClientException
     */
    public function wechatConfigQuery(Model\WechatConfigQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigQueryRequestMarshaller::getInstance(),
            Model\WechatConfigQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigQueryV2Request $request
     * @return Model\WechatConfigQueryV2Response
     * @throws YopClientException
     */
    public function wechatConfigQueryV2(Model\WechatConfigQueryV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigQueryV2RequestMarshaller::getInstance(),
            Model\WechatConfigQueryV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
