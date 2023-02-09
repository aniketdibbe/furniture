<?php

/**
 * Inheritance: yes
 * Variants: yes
 *
 * Fields Summary:
 * - Materialtype [select]
 * - Fabric [select]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Material\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Material\Listing|\Pimcore\Model\DataObject\Material|null getByMaterialtype($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Material\Listing|\Pimcore\Model\DataObject\Material|null getByFabric($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Material extends Concrete
{
protected $o_classId = "6";
protected $o_className = "Material";
protected $Materialtype;
protected $Fabric;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Material
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get Materialtype - Material type
* @return string|null
*/
public function getMaterialtype(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Materialtype");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Materialtype;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Materialtype")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Materialtype");
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
* Set Materialtype - Material type
* @param string|null $Materialtype
* @return \Pimcore\Model\DataObject\Material
*/
public function setMaterialtype(?string $Materialtype)
{
	$this->Materialtype = $Materialtype;

	return $this;
}

/**
* Get Fabric - Fabric
* @return string|null
*/
public function getFabric(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Fabric");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Fabric;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Fabric")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Fabric");
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
* Set Fabric - Fabric
* @param string|null $Fabric
* @return \Pimcore\Model\DataObject\Material
*/
public function setFabric(?string $Fabric)
{
	$this->Fabric = $Fabric;

	return $this;
}

}

