<?php

/**
 * Fields Summary:
 * - BedType [select]
 * - Storage [select]
 * - SeatingHeight [quantityValue]
 * - RecommendedMattressSize [input]
 * - Weight [quantityValue]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Bed extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Bed";
protected $BedType;
protected $Storage;
protected $SeatingHeight;
protected $RecommendedMattressSize;
protected $Weight;


/**
* Bed constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get BedType - Bed Type
* @return string|null
*/
public function getBedType(): ?string
{
	$data = $this->BedType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("BedType")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("BedType");
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
* Set BedType - Bed Type
* @param string|null $BedType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Bed
*/
public function setBedType (?string $BedType)
{
	$this->BedType = $BedType;

	return $this;
}

/**
* Get Storage - Storage
* @return string|null
*/
public function getStorage(): ?string
{
	$data = $this->Storage;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Storage")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Storage");
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
* Set Storage - Storage
* @param string|null $Storage
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Bed
*/
public function setStorage (?string $Storage)
{
	$this->Storage = $Storage;

	return $this;
}

/**
* Get SeatingHeight - Seating Height
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getSeatingHeight(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
	$data = $this->SeatingHeight;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("SeatingHeight")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("SeatingHeight");
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
* Set SeatingHeight - Seating Height
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $SeatingHeight
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Bed
*/
public function setSeatingHeight (?\Pimcore\Model\DataObject\Data\QuantityValue $SeatingHeight)
{
	$this->SeatingHeight = $SeatingHeight;

	return $this;
}

/**
* Get RecommendedMattressSize - Recommended Mattress Size
* @return string|null
*/
public function getRecommendedMattressSize(): ?string
{
	$data = $this->RecommendedMattressSize;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("RecommendedMattressSize")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("RecommendedMattressSize");
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
* Set RecommendedMattressSize - Recommended Mattress Size
* @param string|null $RecommendedMattressSize
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Bed
*/
public function setRecommendedMattressSize (?string $RecommendedMattressSize)
{
	$this->RecommendedMattressSize = $RecommendedMattressSize;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Bed
*/
public function setWeight (?\Pimcore\Model\DataObject\Data\QuantityValue $Weight)
{
	$this->Weight = $Weight;

	return $this;
}

}

