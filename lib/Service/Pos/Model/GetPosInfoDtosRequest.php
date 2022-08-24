<?php


namespace Yeepay\Yop\Sdk\Service\Pos\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class GetPosInfoDtosRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $customerNumber;
    /**
     * @var string
     */
    private $posCati;
    /**
     * @var string
     */
    private $serialNumber;
    /**
     * @var string
     */
    private $shopName;

    /**
     * Gets customerNumber
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * Sets customerNumber
     *
     * @param string $customerNumber
     * @return GetPosInfoDtosRequest
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;
        return $this;
    }
    /**
     * Gets posCati
     *
     * @return string
     */
    public function getPosCati()
    {
        return $this->posCati;
    }

    /**
     * Sets posCati
     *
     * @param string $posCati
     * @return GetPosInfoDtosRequest
     */
    public function setPosCati($posCati)
    {
        $this->posCati = $posCati;
        return $this;
    }
    /**
     * Gets serialNumber
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Sets serialNumber
     *
     * @param string $serialNumber
     * @return GetPosInfoDtosRequest
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }
    /**
     * Gets shopName
     *
     * @return string
     */
    public function getShopName()
    {
        return $this->shopName;
    }

    /**
     * Sets shopName
     *
     * @param string $shopName
     * @return GetPosInfoDtosRequest
     */
    public function setShopName($shopName)
    {
        $this->shopName = $shopName;
        return $this;
    }

    public static function getOperationId()
    {
        return 'getPosInfoDtos';
    }


}
