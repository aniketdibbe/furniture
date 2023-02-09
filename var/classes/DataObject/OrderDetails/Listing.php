<?php

namespace Pimcore\Model\DataObject\OrderDetails;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\OrderDetails|false current()
 * @method DataObject\OrderDetails[] load()
 * @method DataObject\OrderDetails[] getData()
 * @method DataObject\OrderDetails[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "10";
protected $className = "OrderDetails";


/**
* Filter by Name (Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByName ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Name")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by MoblieNumber (Moblie Number)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByMoblieNumber ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("MoblieNumber")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by OrderDate (Order Date)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByOrderDate ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("OrderDate")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by DeliveryDate (Delivery Date)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDeliveryDate ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("DeliveryDate")->addListingFilter($this, $data, $operator);
	return $this;
}



}
