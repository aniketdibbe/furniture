<?php

namespace Pimcore\Model\DataObject\Seller;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Seller|false current()
 * @method DataObject\Seller[] load()
 * @method DataObject\Seller[] getData()
 * @method DataObject\Seller[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "8";
protected $className = "Seller";


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
* Filter by SellerId (Seller Id)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySellerId ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("SellerId")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by ContactDetails (Contact Details)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByContactDetails ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("ContactDetails")->addListingFilter($this, $data, $operator);
	return $this;
}



}
