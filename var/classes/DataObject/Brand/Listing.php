<?php

namespace Pimcore\Model\DataObject\Brand;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Brand|false current()
 * @method DataObject\Brand[] load()
 * @method DataObject\Brand[] getData()
 * @method DataObject\Brand[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "5";
protected $className = "Brand";


/**
* Filter by BrandName (Brand Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByBrandName ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("BrandName")->addListingFilter($this, $data, $operator);
	return $this;
}



}
