<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class OcrIdcardRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $idCardSide;
    /**
     * @var string
     */
    private $imageType;
    /**
     * @var string
     */
    private $idCardImage;
    /**
     * @var string
     */
    private $cardType;

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return OcrIdcardRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return OcrIdcardRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
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
     * @return OcrIdcardRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets idCardSide
     *
     * @return string
     */
    public function getIdCardSide()
    {
        return $this->idCardSide;
    }

    /**
     * Sets idCardSide
     *
     * @param string $idCardSide
     * @return OcrIdcardRequest
     */
    public function setIdCardSide($idCardSide)
    {
        $this->idCardSide = $idCardSide;
        return $this;
    }
    /**
     * Gets imageType
     *
     * @return string
     */
    public function getImageType()
    {
        return $this->imageType;
    }

    /**
     * Sets imageType
     *
     * @param string $imageType
     * @return OcrIdcardRequest
     */
    public function setImageType($imageType)
    {
        $this->imageType = $imageType;
        return $this;
    }
    /**
     * Gets idCardImage
     *
     * @return string
     */
    public function getIdCardImage()
    {
        return $this->idCardImage;
    }

    /**
     * Sets idCardImage
     *
     * @param string $idCardImage
     * @return OcrIdcardRequest
     */
    public function setIdCardImage($idCardImage)
    {
        $this->idCardImage = $idCardImage;
        return $this;
    }
    /**
     * Gets cardType
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Sets cardType
     *
     * @param string $cardType
     * @return OcrIdcardRequest
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'ocrIdcard';
    }


}
