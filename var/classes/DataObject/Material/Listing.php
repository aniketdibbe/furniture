<?php

namespace Pimcore\Model\DataObject\Material;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Material|false current()
 * @method DataObject\Material[] load()
 * @method DataObject\Material[] getData()
 * @method DataObject\Material[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "6";
protected $className = "Material";


/**
* Filter by Materialtype (Material type)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByMaterialtype ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Materialtype")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Fabric (Fabric)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByFabric ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Fabric")->addListingFilter($this, $data, $operator);
	return $this;
}



}
