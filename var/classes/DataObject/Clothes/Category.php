<?php

namespace Pimcore\Model\DataObject\Clothes;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class Category extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['TopWear','BottomWear'];


protected $TopWear = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\TopWear|null
*/
public function getTopWear(bool $includeDeletedBricks = false)
{
	if(!$this->TopWear && \Pimcore\Model\DataObject::doGetInheritedValues($this->getObject())) { 
		try {
			$brickContainer = $this->getObject()->getValueFromParent("Category");
			if(!empty($brickContainer)) {
				//check if parent object has brick, and if so, create an empty brick to enable inheritance
				$parentBrick = $this->getObject()->getValueFromParent("Category")->getTopWear($includeDeletedBricks);
				if (!empty($parentBrick)) {
					$brickType = "\\Pimcore\\Model\\DataObject\\Objectbrick\\Data\\" . ucfirst($parentBrick->getType());
					$brick = new $brickType($this->getObject());
					$brick->setFieldname("Category");
					$this->setTopWear($brick);
					return $brick;
				}
			}
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if(!$includeDeletedBricks &&
		isset($this->TopWear) &&
		$this->TopWear->getDoDelete()) {
			return null;
	}
	return $this->TopWear;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\TopWear $TopWear
* @return \Pimcore\Model\DataObject\Clothes\Category
*/
public function setTopWear($TopWear)
{
	$this->TopWear = $TopWear;
	return $this;
}

protected $BottomWear = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\BottomWear|null
*/
public function getBottomWear(bool $includeDeletedBricks = false)
{
	if(!$this->BottomWear && \Pimcore\Model\DataObject::doGetInheritedValues($this->getObject())) { 
		try {
			$brickContainer = $this->getObject()->getValueFromParent("Category");
			if(!empty($brickContainer)) {
				//check if parent object has brick, and if so, create an empty brick to enable inheritance
				$parentBrick = $this->getObject()->getValueFromParent("Category")->getBottomWear($includeDeletedBricks);
				if (!empty($parentBrick)) {
					$brickType = "\\Pimcore\\Model\\DataObject\\Objectbrick\\Data\\" . ucfirst($parentBrick->getType());
					$brick = new $brickType($this->getObject());
					$brick->setFieldname("Category");
					$this->setBottomWear($brick);
					return $brick;
				}
			}
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if(!$includeDeletedBricks &&
		isset($this->BottomWear) &&
		$this->BottomWear->getDoDelete()) {
			return null;
	}
	return $this->BottomWear;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\BottomWear $BottomWear
* @return \Pimcore\Model\DataObject\Clothes\Category
*/
public function setBottomWear($BottomWear)
{
	$this->BottomWear = $BottomWear;
	return $this;
}

}

