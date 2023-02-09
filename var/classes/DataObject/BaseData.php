<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - Category [objectbricks]
 * - ProductName [input]
 * - SKU [input]
 * - ProductMainImage [image]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\BaseData\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\BaseData\Listing|\Pimcore\Model\DataObject\BaseData|null getByProductName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\BaseData\Listing|\Pimcore\Model\DataObject\BaseData|null getBySKU($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\BaseData\Listing|\Pimcore\Model\DataObject\BaseData|null getByProductMainImage($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class BaseData extends Concrete
{
protected $o_classId = "1";
protected $o_className = "BaseData";
protected $Category;
protected $ProductName;
protected $SKU;
protected $ProductMainImage;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\BaseData
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* @return \Pimcore\Model\DataObject\BaseData\Category
*/
public function getCategory(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->Category;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\BaseData\\Category")) {
			$data = new \Pimcore\Model\DataObject\BaseData\Category($this, "Category");
			$this->Category = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Category");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set Category - Category
* @param \Pimcore\Model\DataObject\Objectbrick|null $Category
* @return \Pimcore\Model\DataObject\BaseData
*/
public function setCategory(?\Pimcore\Model\DataObject\Objectbrick $Category)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("Category");
	$this->Category = $fd->preSetData($this, $Category);
	return $this;
}

/**
* Get ProductName - Product Name
* @return string|null
*/
public function getProductName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ProductName");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->ProductName;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set ProductName - Product Name
* @param string|null $ProductName
* @return \Pimcore\Model\DataObject\BaseData
*/
public function setProductName(?string $ProductName)
{
	$this->ProductName = $ProductName;

	return $this;
}

/**
* Get SKU - S K U
* @return string|null
*/
public function getSKU(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("SKU");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->SKU;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set SKU - S K U
* @param string|null $SKU
* @return \Pimcore\Model\DataObject\BaseData
*/
public function setSKU(?string $SKU)
{
	$this->SKU = $SKU;

	return $this;
}

/**
* Get ProductMainImage - Product Main Image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getProductMainImage(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ProductMainImage");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->ProductMainImage;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set ProductMainImage - Product Main Image
* @param \Pimcore\Model\Asset\Image|null $ProductMainImage
* @return \Pimcore\Model\DataObject\BaseData
*/
public function setProductMainImage(?\Pimcore\Model\Asset\Image $ProductMainImage)
{
	$this->ProductMainImage = $ProductMainImage;

	return $this;
}

}

