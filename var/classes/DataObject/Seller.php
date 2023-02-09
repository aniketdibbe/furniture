<?php

/**
 * Inheritance: yes
 * Variants: yes
 *
 * Fields Summary:
 * - Name [input]
 * - SellerId [input]
 * - ContactDetails [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Seller\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Seller\Listing|\Pimcore\Model\DataObject\Seller|null getByName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Seller\Listing|\Pimcore\Model\DataObject\Seller|null getBySellerId($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Seller\Listing|\Pimcore\Model\DataObject\Seller|null getByContactDetails($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Seller extends Concrete
{
protected $o_classId = "8";
protected $o_className = "Seller";
protected $Name;
protected $SellerId;
protected $ContactDetails;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Seller
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
* @return \Pimcore\Model\DataObject\Seller
*/
public function setName(?string $Name)
{
	$this->Name = $Name;

	return $this;
}

/**
* Get SellerId - Seller Id
* @return string|null
*/
public function getSellerId(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("SellerId");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->SellerId;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("SellerId")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("SellerId");
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
* Set SellerId - Seller Id
* @param string|null $SellerId
* @return \Pimcore\Model\DataObject\Seller
*/
public function setSellerId(?string $SellerId)
{
	$this->SellerId = $SellerId;

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
* @return \Pimcore\Model\DataObject\Seller
*/
public function setContactDetails(?string $ContactDetails)
{
	$this->ContactDetails = $ContactDetails;

	return $this;
}

}

