<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - ProductDescription [wysiwyg]
 * - CountryOfOrigin [country]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Description\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Description\Listing|\Pimcore\Model\DataObject\Description|null getByProductDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Description\Listing|\Pimcore\Model\DataObject\Description|null getByCountryOfOrigin($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Description extends Concrete
{
protected $o_classId = "3";
protected $o_className = "Description";
protected $ProductDescription;
protected $CountryOfOrigin;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Description
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get ProductDescription - Product Description
* @return string|null
*/
public function getProductDescription(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ProductDescription");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("ProductDescription")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set ProductDescription - Product Description
* @param string|null $ProductDescription
* @return \Pimcore\Model\DataObject\Description
*/
public function setProductDescription(?string $ProductDescription)
{
	$this->ProductDescription = $ProductDescription;

	return $this;
}

/**
* Get CountryOfOrigin - Country Of Origin
* @return string|null
*/
public function getCountryOfOrigin(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("CountryOfOrigin");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->CountryOfOrigin;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set CountryOfOrigin - Country Of Origin
* @param string|null $CountryOfOrigin
* @return \Pimcore\Model\DataObject\Description
*/
public function setCountryOfOrigin(?string $CountryOfOrigin)
{
	$this->CountryOfOrigin = $CountryOfOrigin;

	return $this;
}

}

