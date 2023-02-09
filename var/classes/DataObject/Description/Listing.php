<?php

namespace Pimcore\Model\DataObject\Description;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Description|false current()
 * @method DataObject\Description[] load()
 * @method DataObject\Description[] getData()
 * @method DataObject\Description[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "3";
protected $className = "Description";


/**
* Filter by ProductDescription (Product Description)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProductDescription ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("ProductDescription")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by CountryOfOrigin (Country Of Origin)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCountryOfOrigin ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("CountryOfOrigin")->addListingFilter($this, $data, $operator);
	return $this;
}



}
