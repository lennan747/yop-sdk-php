<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class UpopActivescanQuerypayeeorderRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantFlowId;
    /**
     * @var string
     */
    private $qrCode;

    /**
     * Gets merchantFlowId
     *
     * @return string
     */
    public function getMerchantFlowId()
    {
        return $this->merchantFlowId;
    }

    /**
     * Sets merchantFlowId
     *
     * @param string $merchantFlowId
     * @return UpopActivescanQuerypayeeorderRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
        return $this;
    }
    /**
     * Gets qrCode
     *
     * @return string
     */
    public function getQrCode()
    {
        return $this->qrCode;
    }

    /**
     * Sets qrCode
     *
     * @param string $qrCode
     * @return UpopActivescanQuerypayeeorderRequest
     */
    public function setQrCode($qrCode)
    {
        $this->qrCode = $qrCode;
        return $this;
    }

    public static function getOperationId()
    {
        return 'upopActivescanQuerypayeeorder';
    }


}
