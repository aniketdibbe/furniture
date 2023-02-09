<?php

/**
 * Inheritance: yes
 * Variants: yes
 *
 * Fields Summary:
 * - Length [quantityValue]
 * - Height [quantityValue]
 * - Width [quantityValue]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Dimensions\Listing getList(array $config = [])
*/

class Dimensions extends Concrete
{
protected $o_classId = "9";
protected $o_className = "Dimensions";
protected $Length;
protected $Height;
protected $Width;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Dimensions
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get Length - Length
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getLength(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Length");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Length;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Length")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Length");
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
* Set Length - Length
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $Length
* @return \Pimcore\Model\DataObject\Dimensions
*/
public function setLength(?\Pimcore\Model\DataObject\Data\QuantityValue $Length)
{
	$this->Length = $Length;

	return $this;
}

/**
* Get Height - Height
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getHeight(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Height");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Height;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Height")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Height");
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
* Set Height - Height
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $Height
* @return \Pimcore\Model\DataObject\Dimensions
*/
public function setHeight(?\Pimcore\Model\DataObject\Data\QuantityValue $Height)
{
	$this->Height = $Height;

	return $this;
}

/**
* Get Width - Width
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getWidth(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Width");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Width;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Width")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Width");
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
* Set Width - Width
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $Width
* @return \Pimcore\Model\DataObject\Dimensions
*/
public function setWidth(?\Pimcore\Model\DataObject\Data\QuantityValue $Width)
{
	$this->Width = $Width;

	return $this;
}

}

