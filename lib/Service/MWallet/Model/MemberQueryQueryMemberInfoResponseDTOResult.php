<?php
/**
 * MemberQueryQueryMemberInfoResponseDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 会员钱包
 *
 * <p>中台会员钱包</p>
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yeepay\Yop\Sdk\Service\MWallet\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * MemberQueryQueryMemberInfoResponseDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MemberQueryQueryMemberInfoResponseDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MemberQueryQueryMemberInfoResponseDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'memberNo' => 'string',
        'externalUserId' => 'string',
        'walletStatus' => 'string',
        'walletCategory' => 'string',
        'renewStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'memberNo' => null,
        'externalUserId' => null,
        'walletStatus' => null,
        'walletCategory' => null,
        'renewStatus' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'code' => 'code',
        'message' => 'message',
        'memberNo' => 'memberNo',
        'externalUserId' => 'externalUserId',
        'walletStatus' => 'walletStatus',
        'walletCategory' => 'walletCategory',
        'renewStatus' => 'renewStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'memberNo' => 'setMemberNo',
        'externalUserId' => 'setExternalUserId',
        'walletStatus' => 'setWalletStatus',
        'walletCategory' => 'setWalletCategory',
        'renewStatus' => 'setRenewStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'memberNo' => 'getMemberNo',
        'externalUserId' => 'getExternalUserId',
        'walletStatus' => 'getWalletStatus',
        'walletCategory' => 'getWalletCategory',
        'renewStatus' => 'getRenewStatus'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['memberNo'] = isset($data['memberNo']) ? $data['memberNo'] : null;
        $this->container['externalUserId'] = isset($data['externalUserId']) ? $data['externalUserId'] : null;
        $this->container['walletStatus'] = isset($data['walletStatus']) ? $data['walletStatus'] : null;
        $this->container['walletCategory'] = isset($data['walletCategory']) ? $data['walletCategory'] : null;
        $this->container['renewStatus'] = isset($data['renewStatus']) ? $data['renewStatus'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 返回码
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 返回信息
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets memberNo
     *
     * @return string
     */
    public function getMemberNo()
    {
        return $this->container['memberNo'];
    }

    /**
     * Sets memberNo
     *
     * @param string $memberNo 会员号
     *
     * @return $this
     */
    public function setMemberNo($memberNo)
    {
        $this->container['memberNo'] = $memberNo;

        return $this;
    }

    /**
     * Gets externalUserId
     *
     * @return string
     */
    public function getExternalUserId()
    {
        return $this->container['externalUserId'];
    }

    /**
     * Sets externalUserId
     *
     * @param string $externalUserId 商户用户ID
     *
     * @return $this
     */
    public function setExternalUserId($externalUserId)
    {
        $this->container['externalUserId'] = $externalUserId;

        return $this;
    }

    /**
     * Gets walletStatus
     *
     * @return string
     */
    public function getWalletStatus()
    {
        return $this->container['walletStatus'];
    }

    /**
     * Sets walletStatus
     *
     * @param string $walletStatus 钱包账户状态
     *
     * @return $this
     */
    public function setWalletStatus($walletStatus)
    {
        $this->container['walletStatus'] = $walletStatus;

        return $this;
    }

    /**
     * Gets walletCategory
     *
     * @return string
     */
    public function getWalletCategory()
    {
        return $this->container['walletCategory'];
    }

    /**
     * Sets walletCategory
     *
     * @param string $walletCategory 钱包账户等级
     *
     * @return $this
     */
    public function setWalletCategory($walletCategory)
    {
        $this->container['walletCategory'] = $walletCategory;

        return $this;
    }

    /**
     * Gets renewStatus
     *
     * @return string
     */
    public function getRenewStatus()
    {
        return $this->container['renewStatus'];
    }

    /**
     * Sets renewStatus
     *
     * @param string $renewStatus 续费状态
     *
     * @return $this
     */
    public function setRenewStatus($renewStatus)
    {
        $this->container['renewStatus'] = $renewStatus;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


