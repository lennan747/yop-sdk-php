<?php


namespace Yeepay\Yop\Sdk\Service\Std;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Model\YosDownloadResponse;
use Yeepay\Yop\Sdk\Model\Transform\YosDownloadResponseUnMarshaller;
use Yeepay\Yop\Sdk\Service\Std\Model as Model;

class StdClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * StdClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BillDividedaydownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billDividedaydownload(Model\BillDividedaydownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillDividedaydownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillApplyRequest $request
     * @return Model\BillFundbillApplyResponse
     * @throws YopClientException
     */
    public function billFundbillApply(Model\BillFundbillApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillApplyRequestMarshaller::getInstance(),
            Model\BillFundbillApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillBolEndbalanceApplyRequest $request
     * @return Model\BillFundbillBolEndbalanceApplyResponse
     * @throws YopClientException
     */
    public function billFundbillBolEndbalanceApply(Model\BillFundbillBolEndbalanceApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillBolEndbalanceApplyRequestMarshaller::getInstance(),
            Model\BillFundbillBolEndbalanceApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillBolSettleApplyRequest $request
     * @return Model\BillFundbillBolSettleApplyResponse
     * @throws YopClientException
     */
    public function billFundbillBolSettleApply(Model\BillFundbillBolSettleApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillBolSettleApplyRequestMarshaller::getInstance(),
            Model\BillFundbillBolSettleApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillDownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billFundbillDownload(Model\BillFundbillDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getFileId() == null) {
            throw new YopClientException("request.fileId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillDownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillEndbalanceApplyRequest $request
     * @return Model\BillFundbillEndbalanceApplyResponse
     * @throws YopClientException
     */
    public function billFundbillEndbalanceApply(Model\BillFundbillEndbalanceApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillEndbalanceApplyRequestMarshaller::getInstance(),
            Model\BillFundbillEndbalanceApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillFlowQueryRequest $request
     * @return Model\BillFundbillFlowQueryResponse
     * @throws YopClientException
     */
    public function billFundbillFlowQuery(Model\BillFundbillFlowQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getStartDate() == null) {
            throw new YopClientException("request.startDate is required.");
        }
        if ($request->getEndDate() == null) {
            throw new YopClientException("request.endDate is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getPage() == null) {
            throw new YopClientException("request.page is required.");
        }
        if ($request->getSize() == null) {
            throw new YopClientException("request.size is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillFlowQueryRequestMarshaller::getInstance(),
            Model\BillFundbillFlowQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillFlowSumRequest $request
     * @return Model\BillFundbillFlowSumResponse
     * @throws YopClientException
     */
    public function billFundbillFlowSum(Model\BillFundbillFlowSumRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getStartDate() == null) {
            throw new YopClientException("request.startDate is required.");
        }
        if ($request->getEndDate() == null) {
            throw new YopClientException("request.endDate is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillFlowSumRequestMarshaller::getInstance(),
            Model\BillFundbillFlowSumResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillSettlebillDownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billSettlebillDownload(Model\BillSettlebillDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getSettleDate() == null) {
            throw new YopClientException("request.settleDate is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillSettlebillDownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillTradedaydownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billTradedaydownload(Model\BillTradedaydownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillTradedaydownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CertOrderRequest $request
     * @return Model\CertOrderResponse
     * @throws YopClientException
     */
    public function certOrder(Model\CertOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CertOrderRequestMarshaller::getInstance(),
            Model\CertOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
