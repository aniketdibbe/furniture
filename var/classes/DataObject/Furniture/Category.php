<?php

namespace Pimcore\Model\DataObject\Furniture;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class Category extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['Dinning','Bed','Sofas'];


protected $Dinning = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Dinning|null
*/
public function getDinning(bool $includeDeletedBricks = false)
{
	if(!$this->Dinning && \Pimcore\Model\DataObject::doGetInheritedValues($this->getObject())) { 
		try {
			$brickContainer = $this->getObject()->getValueFromParent("Category");
			if(!empty($brickContainer)) {
				//check if parent object has brick, and if so, create an empty brick to enable inheritance
				$parentBrick = $this->getObject()->getValueFromParent("Category")->getDinning($includeDeletedBricks);
				if (!empty($parentBrick)) {
					$brickType = "\\Pimcore\\Model\\DataObject\\Objectbrick\\Data\\" . ucfirst($parentBrick->getType());
					$brick = new $brickType($this->getObject());
					$brick->setFieldname("Category");
					$this->setDinning($brick);
					return $brick;
				}
			}
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if(!$includeDeletedBricks &&
		isset($this->Dinning) &&
		$this->Dinning->getDoDelete()) {
			return null;
	}
	return $this->Dinning;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Dinning $Dinning
* @return \Pimcore\Model\DataObject\Furniture\Category
*/
public function setDinning($Dinning)
{
	$this->Dinning = $Dinning;
	return $this;
}

protected $Bed = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Bed|null
*/
public function getBed(bool $includeDeletedBricks = false)
{
	if(!$this->Bed && \Pimcore\Model\DataObject::doGetInheritedValues($this->getObject())) { 
		try {
			$brickContainer = $this->getObject()->getValueFromParent("Category");
			if(!empty($brickContainer)) {
				//check if parent object has brick, and if so, create an empty brick to enable inheritance
				$parentBrick = $this->getObject()->getValueFromParent("Category")->getBed($includeDeletedBricks);
				if (!empty($parentBrick)) {
					$brickType = "\\Pimcore\\Model\\DataObject\\Objectbrick\\Data\\" . ucfirst($parentBrick->getType());
					$brick = new $brickType($this->getObject());
					$brick->setFieldname("Category");
					$this->setBed($brick);
					return $brick;
				}
			}
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if(!$includeDeletedBricks &&
		isset($this->Bed) &&
		$this->Bed->getDoDelete()) {
			return null;
	}
	return $this->Bed;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Bed $Bed
* @return \Pimcore\Model\DataObject\Furniture\Category
*/
public function setBed($Bed)
{
	$this->Bed = $Bed;
	return $this;
}

protected $Sofas = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Sofas|null
*/
public function getSofas(bool $includeDeletedBricks = false)
{
	if(!$this->Sofas && \Pimcore\Model\DataObject::doGetInheritedValues($this->getObject())) { 
		try {
			$brickContainer = $this->getObject()->getValueFromParent("Category");
			if(!empty($brickContainer)) {
				//check if parent object has brick, and if so, create an empty brick to enable inheritance
				$parentBrick = $this->getObject()->getValueFromParent("Category")->getSofas($includeDeletedBricks);
				if (!empty($parentBrick)) {
					$brickType = "\\Pimcore\\Model\\DataObject\\Objectbrick\\Data\\" . ucfirst($parentBrick->getType());
					$brick = new $brickType($this->getObject());
					$brick->setFieldname("Category");
					$this->setSofas($brick);
					return $brick;
				}
			}
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if(!$includeDeletedBricks &&
		isset($this->Sofas) &&
		$this->Sofas->getDoDelete()) {
			return null;
	}
	return $this->Sofas;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Sofas $Sofas
* @return \Pimcore\Model\DataObject\Furniture\Category
*/
public function setSofas($Sofas)
{
	$this->Sofas = $Sofas;
	return $this;
}

}

