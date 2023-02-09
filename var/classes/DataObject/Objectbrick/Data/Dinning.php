<?php

/**
 * Fields Summary:
 * - Seater [slider]
 * - SeatingComfort [select]
 * - Shape [select]
 * - Weight [quantityValue]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Dinning extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Dinning";
protected $Seater;
protected $SeatingComfort;
protected $Shape;
protected $Weight;


/**
* Dinning constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get Seater - Seater
* @return float|null
*/
public function getSeater(): ?float
{
	$data = $this->Seater;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Seater")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Seater");
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
* Set Seater - Seater
* @param float|null $Seater
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Dinning
*/
public function setSeater (?float $Seater)
{
	$this->Seater = $Seater;

	return $this;
}

/**
* Get SeatingComfort - Seating Comfort
* @return string|null
*/
public function getSeatingComfort(): ?string
{
	$data = $this->SeatingComfort;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("SeatingComfort")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("SeatingComfort");
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
* Set SeatingComfort - Seating Comfort
* @param string|null $SeatingComfort
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Dinning
*/
public function setSeatingComfort (?string $SeatingComfort)
{
	$this->SeatingComfort = $SeatingComfort;

	return $this;
}

/**
* Get Shape - Shape
* @return string|null
*/
public function getShape(): ?string
{
	$data = $this->Shape;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Shape")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Shape");
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
* Set Shape - Shape
* @param string|null $Shape
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Dinning
*/
public function setShape (?string $Shape)
{
	$this->Shape = $Shape;

	return $this;
}

/**
* Get Weight - Weight
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getWeight(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
	$data = $this->Weight;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Weight")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Weight");
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
* Set Weight - Weight
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $Weight
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Dinning
*/
public function setWeight (?\Pimcore\Model\DataObject\Data\QuantityValue $Weight)
{
	$this->Weight = $Weight;

	return $this;
}

}

