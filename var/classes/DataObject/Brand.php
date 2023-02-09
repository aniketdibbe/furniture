<?php

/**
 * Inheritance: yes
 * Variants: yes
 *
 * Fields Summary:
 * - BrandName [select]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Brand\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Brand\Listing|\Pimcore\Model\DataObject\Brand|null getByBrandName($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Brand extends Concrete
{
protected $o_classId = "5";
protected $o_className = "Brand";
protected $BrandName;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Brand
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get BrandName - Brand Name
* @return string|null
*/
public function getBrandName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("BrandName");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->BrandName;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("BrandName")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("BrandName");
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
* Set BrandName - Brand Name
* @param string|null $BrandName
* @return \Pimcore\Model\DataObject\Brand
*/
public function setBrandName(?string $BrandName)
{
	$this->BrandName = $BrandName;

	return $this;
}

}

