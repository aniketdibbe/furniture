<?php

namespace Pimcore\Model\DataObject\BaseData;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\BaseData|false current()
 * @method DataObject\BaseData[] load()
 * @method DataObject\BaseData[] getData()
 * @method DataObject\BaseData[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "1";
protected $className = "BaseData";


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



}
