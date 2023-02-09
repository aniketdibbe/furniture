<?php

/**
 * Fields Summary:
 * - Legs [numeric]
 * - SeatingCapacity [numeric]
 * - Cusions [numeric]
 * - Configuration [select]
 * - Density [quantityValue]
 * - SeatingComfort [select]
 * - Weight [quantityValue]
 * - SettingHeight [quantityValue]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Sofas extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Sofas";
protected $Legs;
protected $SeatingCapacity;
protected $Cusions;
protected $Configuration;
protected $Density;
protected $SeatingComfort;
protected $Weight;
protected $SettingHeight;


/**
* Sofas constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get Legs - Legs
* @return float|null
*/
public function getLegs(): ?float
{
	$data = $this->Legs;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Legs")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Legs");
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
* Set Legs - Legs
* @param float|null $Legs
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Sofas
*/
public function setLegs (?float $Legs)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("Legs");
	$this->Legs = $fd->preSetData($this, $Legs);
	return $this;
}

/**
* Get SeatingCapacity - Seating Capacity
* @return float|null
*/
public function getSeatingCapacity(): ?float
{
	$data = $this->SeatingCapacity;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("SeatingCapacity")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("SeatingCapacity");
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
* Set SeatingCapacity - Seating Capacity
* @param float|null $SeatingCapacity
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Sofas
*/
public function setSeatingCapacity (?float $SeatingCapacity)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("SeatingCapacity");
	$this->SeatingCapacity = $fd->preSetData($this, $SeatingCapacity);
	return $this;
}

/**
* Get Cusions - Cusions
* @return float|null
*/
public function getCusions(): ?float
{
	$data = $this->Cusions;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Cusions")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Cusions");
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
* Set Cusions - Cusions
* @param float|null $Cusions
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Sofas
*/
public function setCusions (?float $Cusions)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("Cusions");
	$this->Cusions = $fd->preSetData($this, $Cusions);
	return $this;
}

/**
* Get Configuration - Configaration
* @return string|null
*/
public function getConfiguration(): ?string
{
	$data = $this->Configuration;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Configuration")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Configuration");
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
* Set Configuration - Configaration
* @param string|null $Configuration
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Sofas
*/
public function setConfiguration (?string $Configuration)
{
	$this->Configuration = $Configuration;

	return $this;
}

/**
* Get Density - Density
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getDensity(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
	$data = $this->Density;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Density")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Density");
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
* Set Density - Density
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $Density
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Sofas
*/
public function setDensity (?\Pimcore\Model\DataObject\Data\QuantityValue $Density)
{
	$this->Density = $Density;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Sofas
*/
public function setSeatingComfort (?string $SeatingComfort)
{
	$this->SeatingComfort = $SeatingComfort;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Sofas
*/
public function setWeight (?\Pimcore\Model\DataObject\Data\QuantityValue $Weight)
{
	$this->Weight = $Weight;

	return $this;
}

/**
* Get SettingHeight - Setting Height
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getSettingHeight(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
	$data = $this->SettingHeight;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("SettingHeight")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("SettingHeight");
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
* Set SettingHeight - Setting Height
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $SettingHeight
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Sofas
*/
public function setSettingHeight (?\Pimcore\Model\DataObject\Data\QuantityValue $SettingHeight)
{
	$this->SettingHeight = $SettingHeight;

	return $this;
}

}

