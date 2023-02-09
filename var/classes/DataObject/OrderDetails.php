<?php

/**
 * Inheritance: yes
 * Variants: yes
 *
 * Fields Summary:
 * - Name [input]
 * - MoblieNumber [input]
 * - Location [geopoint]
 * - OrderDate [date]
 * - DeliveryDate [date]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\OrderDetails\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\OrderDetails\Listing|\Pimcore\Model\DataObject\OrderDetails|null getByName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OrderDetails\Listing|\Pimcore\Model\DataObject\OrderDetails|null getByMoblieNumber($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OrderDetails\Listing|\Pimcore\Model\DataObject\OrderDetails|null getByOrderDate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\OrderDetails\Listing|\Pimcore\Model\DataObject\OrderDetails|null getByDeliveryDate($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class OrderDetails extends Concrete
{
protected $o_classId = "10";
protected $o_className = "OrderDetails";
protected $Name;
protected $MoblieNumber;
protected $Location;
protected $OrderDate;
protected $DeliveryDate;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OrderDetails
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get Name - Name
* @return string|null
*/
public function getName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Name");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Name;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Name")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Name");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Name - Name
* @param string|null $Name
* @return \Pimcore\Model\DataObject\OrderDetails
*/
public function setName(?string $Name)
{
	$this->Name = $Name;

	return $this;
}

/**
* Get MoblieNumber - Moblie Number
* @return string|null
*/
public function getMoblieNumber(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("MoblieNumber");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->MoblieNumber;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("MoblieNumber")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("MoblieNumber");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set MoblieNumber - Moblie Number
* @param string|null $MoblieNumber
* @return \Pimcore\Model\DataObject\OrderDetails
*/
public function setMoblieNumber(?string $MoblieNumber)
{
	$this->MoblieNumber = $MoblieNumber;

	return $this;
}

/**
* Get Location - Location
* @return \Pimcore\Model\DataObject\Data\GeoCoordinates|null
*/
public function getLocation(): ?\Pimcore\Model\DataObject\Data\GeoCoordinates
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Location");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Location;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Location")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Location");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Location - Location
* @param \Pimcore\Model\DataObject\Data\GeoCoordinates|null $Location
* @return \Pimcore\Model\DataObject\OrderDetails
*/
public function setLocation(?\Pimcore\Model\DataObject\Data\GeoCoordinates $Location)
{
	$this->Location = $Location;

	return $this;
}

/**
* Get OrderDate - Order Date
* @return \Carbon\Carbon|null
*/
public function getOrderDate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("OrderDate");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->OrderDate;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("OrderDate")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("OrderDate");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set OrderDate - Order Date
* @param \Carbon\Carbon|null $OrderDate
* @return \Pimcore\Model\DataObject\OrderDetails
*/
public function setOrderDate(?\Carbon\Carbon $OrderDate)
{
	$this->OrderDate = $OrderDate;

	return $this;
}

/**
* Get DeliveryDate - Delivery Date
* @return \Carbon\Carbon|null
*/
public function getDeliveryDate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("DeliveryDate");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->DeliveryDate;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("DeliveryDate")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("DeliveryDate");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set DeliveryDate - Delivery Date
* @param \Carbon\Carbon|null $DeliveryDate
* @return \Pimcore\Model\DataObject\OrderDetails
*/
public function setDeliveryDate(?\Carbon\Carbon $DeliveryDate)
{
	$this->DeliveryDate = $DeliveryDate;

	return $this;
}

}

