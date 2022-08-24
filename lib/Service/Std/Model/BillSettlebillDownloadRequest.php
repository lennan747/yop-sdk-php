<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BillSettlebillDownloadRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $settleDate;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $settleBatchNo;

    /**
     * Gets settleDate
     *
     * @return string
     */
    public function getSettleDate()
    {
        return $this->settleDate;
    }

    /**
     * Sets settleDate
     *
     * @param string $settleDate
     * @return BillSettlebillDownloadRequest
     */
    public function setSettleDate($settleDate)
    {
        $this->settleDate = $settleDate;
        return $this;
    }
    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return BillSettlebillDownloadRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets settleBatchNo
     *
     * @return string
     */
    public function getSettleBatchNo()
    {
        return $this->settleBatchNo;
    }

    /**
     * Sets settleBatchNo
     *
     * @param string $settleBatchNo
     * @return BillSettlebillDownloadRequest
     */
    public function setSettleBatchNo($settleBatchNo)
    {
        $this->settleBatchNo = $settleBatchNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'billSettlebillDownload';
    }


}
