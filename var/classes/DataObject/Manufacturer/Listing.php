<?php

namespace Pimcore\Model\DataObject\Manufacturer;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Manufacturer|false current()
 * @method DataObject\Manufacturer[] load()
 * @method DataObject\Manufacturer[] getData()
 * @method DataObject\Manufacturer[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "7";
protected $className = "Manufacturer";


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
* Filter by ManufacturerId (Manufacturer Id)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByManufacturerId ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("ManufacturerId")->addListingFilter($this, $data, $operator);
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
