<?php

/**
 * Inheritance: yes
 * Variants: yes
 *
 * Fields Summary:
 * - Category [objectbricks]
 * - ProductName [input]
 * - SKU [input]
 * - Brand [manyToManyObjectRelation]
 * - ProductMainImage [image]
 * - Description [manyToManyObjectRelation]
 * - Dimension [manyToManyObjectRelation]
 * - Material [manyToManyObjectRelation]
 * - Color [select]
 * - RelatedImages [manyToManyObjectRelation]
 * - localizedfields [localizedfields]
 * -- OriginalPrice [numeric]
 * -- Discount [numeric]
 * -- OfferPrice [calculatedValue]
 * - Manufacturer [manyToManyObjectRelation]
 * - Seller [manyToManyObjectRelation]
 * - CustomerAddress [manyToOneRelation]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Furniture\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByProductName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getBySKU($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByBrand($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByProductMainImage($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByDimension($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByMaterial($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByColor($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByRelatedImages($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByLocalizedfields($field, $value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByOriginalPrice($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByDiscount($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByOfferPrice($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByManufacturer($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getBySeller($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Furniture\Listing|\Pimcore\Model\DataObject\Furniture|null getByCustomerAddress($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Furniture extends Concrete
{
protected $o_classId = "11";
protected $o_className = "Furniture";
protected $Category;
protected $ProductName;
protected $SKU;
protected $Brand;
protected $ProductMainImage;
protected $Description;
protected $Dimension;
protected $Material;
protected $Color;
protected $RelatedImages;
protected $localizedfields;
protected $Manufacturer;
protected $Seller;
protected $CustomerAddress;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Furniture
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* @return \Pimcore\Model\DataObject\Furniture\Category
*/
public function getCategory(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->Category;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Furniture\\Category")) {
			$data = new \Pimcore\Model\DataObject\Furniture\Category($this, "Category");
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
* @return \Pimcore\Model\DataObject\Furniture
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

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("ProductName")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("ProductName");
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
* Set ProductName - Product Name
* @param string|null $ProductName
* @return \Pimcore\Model\DataObject\Furniture
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

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("SKU")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("SKU");
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
* Set SKU - S K U
* @param string|null $SKU
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setSKU(?string $SKU)
{
	$this->SKU = $SKU;

	return $this;
}

/**
* Get Brand - Brand
* @return \Pimcore\Model\DataObject\Brand[]
*/
public function getBrand(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Brand");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Brand")->preGetData($this);

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Brand")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Brand");
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
* Set Brand - Brand
* @param \Pimcore\Model\DataObject\Brand[] $Brand
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setBrand(?array $Brand)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("Brand");
	$inheritValues = self::getGetInheritedValues();
	self::setGetInheritedValues(false);
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getBrand();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	self::setGetInheritedValues($inheritValues);
	$isEqual = $fd->isEqual($currentData, $Brand);
	if (!$isEqual) {
		$this->markFieldDirty("Brand", true);
	}
	$this->Brand = $fd->preSetData($this, $Brand);
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

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("ProductMainImage")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("ProductMainImage");
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
* Set ProductMainImage - Product Main Image
* @param \Pimcore\Model\Asset\Image|null $ProductMainImage
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setProductMainImage(?\Pimcore\Model\Asset\Image $ProductMainImage)
{
	$this->ProductMainImage = $ProductMainImage;

	return $this;
}

/**
* Get Description - Description
* @return \Pimcore\Model\DataObject\Description[]
*/
public function getDescription(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Description");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Description")->preGetData($this);

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Description")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Description");
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
* Set Description - Description
* @param \Pimcore\Model\DataObject\Description[] $Description
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setDescription(?array $Description)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("Description");
	$inheritValues = self::getGetInheritedValues();
	self::setGetInheritedValues(false);
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getDescription();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	self::setGetInheritedValues($inheritValues);
	$isEqual = $fd->isEqual($currentData, $Description);
	if (!$isEqual) {
		$this->markFieldDirty("Description", true);
	}
	$this->Description = $fd->preSetData($this, $Description);
	return $this;
}

/**
* Get Dimension - Dimension
* @return \Pimcore\Model\DataObject\Dimensions[]
*/
public function getDimension(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Dimension");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Dimension")->preGetData($this);

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Dimension")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Dimension");
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
* Set Dimension - Dimension
* @param \Pimcore\Model\DataObject\Dimensions[] $Dimension
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setDimension(?array $Dimension)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("Dimension");
	$inheritValues = self::getGetInheritedValues();
	self::setGetInheritedValues(false);
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getDimension();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	self::setGetInheritedValues($inheritValues);
	$isEqual = $fd->isEqual($currentData, $Dimension);
	if (!$isEqual) {
		$this->markFieldDirty("Dimension", true);
	}
	$this->Dimension = $fd->preSetData($this, $Dimension);
	return $this;
}

/**
* Get Material - Material
* @return \Pimcore\Model\DataObject\Material[]
*/
public function getMaterial(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Material");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Material")->preGetData($this);

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Material")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Material");
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
* Set Material - Material
* @param \Pimcore\Model\DataObject\Material[] $Material
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setMaterial(?array $Material)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("Material");
	$inheritValues = self::getGetInheritedValues();
	self::setGetInheritedValues(false);
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getMaterial();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	self::setGetInheritedValues($inheritValues);
	$isEqual = $fd->isEqual($currentData, $Material);
	if (!$isEqual) {
		$this->markFieldDirty("Material", true);
	}
	$this->Material = $fd->preSetData($this, $Material);
	return $this;
}

/**
* Get Color - Color
* @return string|null
*/
public function getColor(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Color");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Color;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Color")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Color");
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
* Set Color - Color
* @param string|null $Color
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setColor(?string $Color)
{
	$this->Color = $Color;

	return $this;
}

/**
* Get RelatedImages - Related Images
* @return \Pimcore\Model\DataObject\Media[]
*/
public function getRelatedImages(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("RelatedImages");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("RelatedImages")->preGetData($this);

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("RelatedImages")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("RelatedImages");
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
* Set RelatedImages - Related Images
* @param \Pimcore\Model\DataObject\Media[] $RelatedImages
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setRelatedImages(?array $RelatedImages)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("RelatedImages");
	$inheritValues = self::getGetInheritedValues();
	self::setGetInheritedValues(false);
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getRelatedImages();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	self::setGetInheritedValues($inheritValues);
	$isEqual = $fd->isEqual($currentData, $RelatedImages);
	if (!$isEqual) {
		$this->markFieldDirty("RelatedImages", true);
	}
	$this->RelatedImages = $fd->preSetData($this, $RelatedImages);
	return $this;
}

/**
* Get localizedfields - 
* @return \Pimcore\Model\DataObject\Localizedfield|null
*/
public function getLocalizedfields(): ?\Pimcore\Model\DataObject\Localizedfield
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("localizedfields");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("localizedfields")->preGetData($this);

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("localizedfields")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("localizedfields");
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
* Get OriginalPrice - Original Price
* @return float|null
*/
public function getOriginalPrice($language = null): ?float
{
	$data = $this->getLocalizedfields()->getLocalizedValue("OriginalPrice", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("OriginalPrice");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Get Discount - Discount
* @return float|null
*/
public function getDiscount($language = null): ?float
{
	$data = $this->getLocalizedfields()->getLocalizedValue("Discount", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Discount");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Get OfferPrice - Offer Price
* @return \Pimcore\Model\DataObject\Data\CalculatedValue|null
*/
public function getOfferPrice($language = null)
{
	if (!$language) {
		try {
			$locale = \Pimcore::getContainer()->get("pimcore.locale")->getLocale();
			if (\Pimcore\Tool::isValidLanguage($locale)) {
				$language = (string) $locale;
			} else {
				throw new \Exception("Not supported language");
			}
		} catch (\Exception $e) {
			$language = \Pimcore\Tool::getDefaultLanguage();
		}
	}
	$object = $this;
	$fieldDefinition = $this->getClass()->getFieldDefinition("localizedfields")->getFieldDefinition("OfferPrice");
	$data = new \Pimcore\Model\DataObject\Data\CalculatedValue('OfferPrice');
	$data->setContextualData("localizedfield", "localizedfields", null, $language, null, null, $fieldDefinition);
	$data = \Pimcore\Model\DataObject\Service::getCalculatedFieldValue($object, $data);
	return $data;
}

/**
* Set localizedfields - 
* @param \Pimcore\Model\DataObject\Localizedfield|null $localizedfields
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setLocalizedfields(?\Pimcore\Model\DataObject\Localizedfield $localizedfields)
{
	$inheritValues = self::getGetInheritedValues();
	self::setGetInheritedValues(false);
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getLocalizedfields();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	self::setGetInheritedValues($inheritValues);
	$this->markFieldDirty("localizedfields", true);
	$this->localizedfields = $localizedfields;

	return $this;
}

/**
* Set OriginalPrice - Original Price
* @param float|null $OriginalPrice
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setOriginalPrice (?float $OriginalPrice, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("OriginalPrice", $OriginalPrice, $language, !$isEqual);

	return $this;
}

/**
* Set Discount - Discount
* @param float|null $Discount
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setDiscount (?float $Discount, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("Discount", $Discount, $language, !$isEqual);

	return $this;
}

/**
* Set OfferPrice - Offer Price
* @param \Pimcore\Model\DataObject\Data\CalculatedValue|null $OfferPrice
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setOfferPrice($OfferPrice, $language = null)
{
	return $this;
}

/**
* Get Manufacturer - Manufacturer
* @return \Pimcore\Model\DataObject\Manufacturer[]
*/
public function getManufacturer(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Manufacturer");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Manufacturer")->preGetData($this);

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Manufacturer")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Manufacturer");
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
* Set Manufacturer - Manufacturer
* @param \Pimcore\Model\DataObject\Manufacturer[] $Manufacturer
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setManufacturer(?array $Manufacturer)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("Manufacturer");
	$inheritValues = self::getGetInheritedValues();
	self::setGetInheritedValues(false);
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getManufacturer();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	self::setGetInheritedValues($inheritValues);
	$isEqual = $fd->isEqual($currentData, $Manufacturer);
	if (!$isEqual) {
		$this->markFieldDirty("Manufacturer", true);
	}
	$this->Manufacturer = $fd->preSetData($this, $Manufacturer);
	return $this;
}

/**
* Get Seller - Seller
* @return \Pimcore\Model\DataObject\Seller[]
*/
public function getSeller(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Seller");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Seller")->preGetData($this);

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("Seller")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Seller");
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
* Set Seller - Seller
* @param \Pimcore\Model\DataObject\Seller[] $Seller
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setSeller(?array $Seller)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("Seller");
	$inheritValues = self::getGetInheritedValues();
	self::setGetInheritedValues(false);
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getSeller();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	self::setGetInheritedValues($inheritValues);
	$isEqual = $fd->isEqual($currentData, $Seller);
	if (!$isEqual) {
		$this->markFieldDirty("Seller", true);
	}
	$this->Seller = $fd->preSetData($this, $Seller);
	return $this;
}

/**
* Get CustomerAddress - Customer Address
* @return \Pimcore\Model\DataObject\OrderDetails|null
*/
public function getCustomerAddress(): ?\Pimcore\Model\Element\AbstractElement
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("CustomerAddress");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("CustomerAddress")->preGetData($this);

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("CustomerAddress")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("CustomerAddress");
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
* Set CustomerAddress - Customer Address
* @param \Pimcore\Model\DataObject\OrderDetails|null $CustomerAddress
* @return \Pimcore\Model\DataObject\Furniture
*/
public function setCustomerAddress(?\Pimcore\Model\Element\AbstractElement $CustomerAddress)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("CustomerAddress");
	$inheritValues = self::getGetInheritedValues();
	self::setGetInheritedValues(false);
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getCustomerAddress();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	self::setGetInheritedValues($inheritValues);
	$isEqual = $fd->isEqual($currentData, $CustomerAddress);
	if (!$isEqual) {
		$this->markFieldDirty("CustomerAddress", true);
	}
	$this->CustomerAddress = $fd->preSetData($this, $CustomerAddress);
	return $this;
}

}

