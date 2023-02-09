<?php

namespace Pimcore\Model\DataObject\Price;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Price|false current()
 * @method DataObject\Price[] load()
 * @method DataObject\Price[] getData()
 * @method DataObject\Price[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "2";
protected $className = "Price";


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



}
