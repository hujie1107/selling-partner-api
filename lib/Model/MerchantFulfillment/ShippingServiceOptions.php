<?php
/**
 * ShippingServiceOptions
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\MerchantFulfillment;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ShippingServiceOptions Class Doc Comment
 *
 * @category Class
 * @description Extra services provided by a carrier.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShippingServiceOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingServiceOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_experience' => '\SellingPartnerApi\Model\MerchantFulfillment\DeliveryExperienceType',
        'declared_value' => '\SellingPartnerApi\Model\MerchantFulfillment\CurrencyAmount',
        'carrier_will_pick_up' => 'bool',
        'carrier_will_pick_up_option' => '\SellingPartnerApi\Model\MerchantFulfillment\CarrierWillPickUpOption',
        'label_format' => '\SellingPartnerApi\Model\MerchantFulfillment\LabelFormat'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery_experience' => null,
        'declared_value' => null,
        'carrier_will_pick_up' => null,
        'carrier_will_pick_up_option' => null,
        'label_format' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'delivery_experience' => 'DeliveryExperience',
        'declared_value' => 'DeclaredValue',
        'carrier_will_pick_up' => 'CarrierWillPickUp',
        'carrier_will_pick_up_option' => 'CarrierWillPickUpOption',
        'label_format' => 'LabelFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_experience' => 'setDeliveryExperience',
        'declared_value' => 'setDeclaredValue',
        'carrier_will_pick_up' => 'setCarrierWillPickUp',
        'carrier_will_pick_up_option' => 'setCarrierWillPickUpOption',
        'label_format' => 'setLabelFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_experience' => 'getDeliveryExperience',
        'declared_value' => 'getDeclaredValue',
        'carrier_will_pick_up' => 'getCarrierWillPickUp',
        'carrier_will_pick_up_option' => 'getCarrierWillPickUpOption',
        'label_format' => 'getLabelFormat'
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
        return self::$openAPIModelName;
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
        $this->container['delivery_experience'] = $data['delivery_experience'] ?? null;
        $this->container['declared_value'] = $data['declared_value'] ?? null;
        $this->container['carrier_will_pick_up'] = $data['carrier_will_pick_up'] ?? null;
        $this->container['carrier_will_pick_up_option'] = $data['carrier_will_pick_up_option'] ?? null;
        $this->container['label_format'] = $data['label_format'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['delivery_experience'] === null) {
            $invalidProperties[] = "'delivery_experience' can't be null";
        }
        if ($this->container['carrier_will_pick_up'] === null) {
            $invalidProperties[] = "'carrier_will_pick_up' can't be null";
        }
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
     * Gets delivery_experience
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillment\DeliveryExperienceType
     */
    public function getDeliveryExperience()
    {
        return $this->container['delivery_experience'];
    }

    /**
     * Sets delivery_experience
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillment\DeliveryExperienceType $delivery_experience delivery_experience
     *
     * @return self
     */
    public function setDeliveryExperience($delivery_experience)
    {
        $this->container['delivery_experience'] = $delivery_experience;

        return $this;
    }

    /**
     * Gets declared_value
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillment\CurrencyAmount|null
     */
    public function getDeclaredValue()
    {
        return $this->container['declared_value'];
    }

    /**
     * Sets declared_value
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillment\CurrencyAmount|null $declared_value declared_value
     *
     * @return self
     */
    public function setDeclaredValue($declared_value)
    {
        $this->container['declared_value'] = $declared_value;

        return $this;
    }

    /**
     * Gets carrier_will_pick_up
     *
     * @return bool
     */
    public function getCarrierWillPickUp()
    {
        return $this->container['carrier_will_pick_up'];
    }

    /**
     * Sets carrier_will_pick_up
     *
     * @param bool $carrier_will_pick_up When true, the carrier will pick up the package. Note: Scheduled carrier pickup is available only using Dynamex (US), DPD (UK), and Royal Mail (UK).
     *
     * @return self
     */
    public function setCarrierWillPickUp($carrier_will_pick_up)
    {
        $this->container['carrier_will_pick_up'] = $carrier_will_pick_up;

        return $this;
    }

    /**
     * Gets carrier_will_pick_up_option
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillment\CarrierWillPickUpOption|null
     */
    public function getCarrierWillPickUpOption()
    {
        return $this->container['carrier_will_pick_up_option'];
    }

    /**
     * Sets carrier_will_pick_up_option
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillment\CarrierWillPickUpOption|null $carrier_will_pick_up_option carrier_will_pick_up_option
     *
     * @return self
     */
    public function setCarrierWillPickUpOption($carrier_will_pick_up_option)
    {
        $this->container['carrier_will_pick_up_option'] = $carrier_will_pick_up_option;

        return $this;
    }

    /**
     * Gets label_format
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillment\LabelFormat|null
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillment\LabelFormat|null $label_format label_format
     *
     * @return self
     */
    public function setLabelFormat($label_format)
    {
        $this->container['label_format'] = $label_format;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


