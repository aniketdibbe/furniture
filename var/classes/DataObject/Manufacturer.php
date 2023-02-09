<?php

/**
 * Inheritance: yes
 * Variants: yes
 *
 * Fields Summary:
 * - Name [input]
 * - ManufacturerId [input]
 * - ContactDetails [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Manufacturer\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Manufacturer\Listing|\Pimcore\Model\DataObject\Manufacturer|null getByName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Manufacturer\Listing|\Pimcore\Model\DataObject\Manufacturer|null getByManufacturerId($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Manufacturer\Listing|\Pimcore\Model\DataObject\Manufacturer|null getByContactDetails($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Manufacturer extends Concrete
{
protected $o_classId = "7";
protected $o_className = "Manufacturer";
protected $Name;
protected $ManufacturerId;
protected $ContactDetails;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Manufacturer
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
* @return \Pimcore\Model\DataObject\Manufacturer
*/
public function setName(?string $Name)
{
	$this->Name = $Name;

	return $this;
}

/**
* Get ManufacturerId - Manufacturer Id
* @return string|null
*/
public function getManufacturerId(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ManufacturerId");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->ManufacturerId;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("ManufacturerId")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("ManufacturerId");
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
* Set ManufacturerId - Manufacturer Id
* @param string|null $ManufacturerId
* @return \Pimcore\Model\DataObject\Manufacturer
*/
public function setManufacturerId(?string $ManufacturerId)
{
	$this->ManufacturerId = $ManufacturerId;

	return $this;
}

/**
* Get ContactDetails - Contact Details
* @return string|null
*/
public function getContactDetails(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ContactDetails");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->ContactDetails;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("ContactDetails")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("ContactDetails");
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
* Set ContactDetails - Contact Details
* @param string|null $ContactDetails
* @return \Pimcore\Model\DataObject\Manufacturer
*/
public function setContactDetails(?string $ContactDetails)
{
	$this->ContactDetails = $ContactDetails;

	return $this;
}

}

