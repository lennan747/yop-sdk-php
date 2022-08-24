<?php


namespace Yeepay\Yop\Sdk\Service\SupplierRemit\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BillDownloadRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $remitDate;

    /**
     * Gets remitDate
     *
     * @return string
     */
    public function getRemitDate()
    {
        return $this->remitDate;
    }

    /**
     * Sets remitDate
     *
     * @param string $remitDate
     * @return BillDownloadRequest
     */
    public function setRemitDate($remitDate)
    {
        $this->remitDate = $remitDate;
        return $this;
    }

    public static function getOperationId()
    {
        return 'billDownload';
    }


}
