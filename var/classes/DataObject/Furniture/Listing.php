<?php

namespace Pimcore\Model\DataObject\Furniture;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Furniture|false current()
 * @method DataObject\Furniture[] load()
 * @method DataObject\Furniture[] getData()
 * @method DataObject\Furniture[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "11";
protected $className = "Furniture";


/**
* Filter by ProductName (Product Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProductName ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("ProductName")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by SKU (S K U)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySKU ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("SKU")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Brand (Brand)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByBrand ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Brand")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by ProductMainImage (Product Main Image)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProductMainImage ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("ProductMainImage")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Description (Description)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDescription ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Description")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Dimension (Dimension)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDimension ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Dimension")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Material (Material)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByMaterial ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Material")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Color (Color)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByColor ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Color")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by RelatedImages (Related Images)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByRelatedImages ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("RelatedImages")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by OriginalPrice (Original Price)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByOriginalPrice ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("OriginalPrice")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Discount (Discount)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDiscount ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Discount")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by OfferPrice (Offer Price)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByOfferPrice ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("OfferPrice")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Manufacturer (Manufacturer)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByManufacturer ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Manufacturer")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Seller (Seller)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySeller ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Seller")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by CustomerAddress (Customer Address)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCustomerAddress ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("CustomerAddress")->addListingFilter($this, $data, $operator);
	return $this;
}



}
