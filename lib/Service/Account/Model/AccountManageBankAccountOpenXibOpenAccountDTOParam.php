<?php
/**
 * AccountManageBankAccountOpenXibOpenAccountDTOParam
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 账户
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
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

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * AccountManageBankAccountOpenXibOpenAccountDTOParam Class Doc Comment
 *
 * @category Class
 * @description 开立银行账户扩展参数，卡户银行编码为XIB时必填
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountManageBankAccountOpenXibOpenAccountDTOParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountManageBankAccountOpenXibOpenAccountDTOParam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mobileNo' => 'string',
        'bindCardNo' => 'string',
        'bindBankCode' => 'string',
        'bindCardType' => 'string',
        'returnUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mobileNo' => null,
        'bindCardNo' => null,
        'bindBankCode' => null,
        'bindCardType' => null,
        'returnUrl' => null
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
        'mobileNo' => 'mobileNo',
        'bindCardNo' => 'bindCardNo',
        'bindBankCode' => 'bindBankCode',
        'bindCardType' => 'bindCardType',
        'returnUrl' => 'returnUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mobileNo' => 'setMobileNo',
        'bindCardNo' => 'setBindCardNo',
        'bindBankCode' => 'setBindBankCode',
        'bindCardType' => 'setBindCardType',
        'returnUrl' => 'setReturnUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mobileNo' => 'getMobileNo',
        'bindCardNo' => 'getBindCardNo',
        'bindBankCode' => 'getBindBankCode',
        'bindCardType' => 'getBindCardType',
        'returnUrl' => 'getReturnUrl'
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
        $this->container['mobileNo'] = isset($data['mobileNo']) ? $data['mobileNo'] : null;
        $this->container['bindCardNo'] = isset($data['bindCardNo']) ? $data['bindCardNo'] : null;
        $this->container['bindBankCode'] = isset($data['bindBankCode']) ? $data['bindBankCode'] : null;
        $this->container['bindCardType'] = isset($data['bindCardType']) ? $data['bindCardType'] : null;
        $this->container['returnUrl'] = isset($data['returnUrl']) ? $data['returnUrl'] : null;
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
     * Gets mobileNo
     *
     * @return string
     */
    public function getMobileNo()
    {
        return $this->container['mobileNo'];
    }

    /**
     * Sets mobileNo
     *
     * @param string $mobileNo mobileNo
     *
     * @return $this
     */
    public function setMobileNo($mobileNo)
    {
        $this->container['mobileNo'] = $mobileNo;

        return $this;
    }

    /**
     * Gets bindCardNo
     *
     * @return string
     */
    public function getBindCardNo()
    {
        return $this->container['bindCardNo'];
    }

    /**
     * Sets bindCardNo
     *
     * @param string $bindCardNo bindCardNo
     *
     * @return $this
     */
    public function setBindCardNo($bindCardNo)
    {
        $this->container['bindCardNo'] = $bindCardNo;

        return $this;
    }

    /**
     * Gets bindBankCode
     *
     * @return string
     */
    public function getBindBankCode()
    {
        return $this->container['bindBankCode'];
    }

    /**
     * Sets bindBankCode
     *
     * @param string $bindBankCode bindBankCode
     *
     * @return $this
     */
    public function setBindBankCode($bindBankCode)
    {
        $this->container['bindBankCode'] = $bindBankCode;

        return $this;
    }

    /**
     * Gets bindCardType
     *
     * @return string
     */
    public function getBindCardType()
    {
        return $this->container['bindCardType'];
    }

    /**
     * Sets bindCardType
     *
     * @param string $bindCardType bindCardType
     *
     * @return $this
     */
    public function setBindCardType($bindCardType)
    {
        $this->container['bindCardType'] = $bindCardType;

        return $this;
    }

    /**
     * Gets returnUrl
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->container['returnUrl'];
    }

    /**
     * Sets returnUrl
     *
     * @param string $returnUrl returnUrl
     *
     * @return $this
     */
    public function setReturnUrl($returnUrl)
    {
        $this->container['returnUrl'] = $returnUrl;

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


