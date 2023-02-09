<?php

/**
 * Inheritance: yes
 * Variants: yes
 *
 * Fields Summary:
 * - GenericImages [imageGallery]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Media\Listing getList(array $config = [])
*/

class Media extends Concrete
{
protected $o_classId = "4";
protected $o_className = "Media";
protected $GenericImages;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Media
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get GenericImages - Generic Images
* @return \Pimcore\Model\DataObject\Data\ImageGallery|null
*/
public function getGenericImages(): ?\Pimcore\Model\DataObject\Data\ImageGallery
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("GenericImages");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->GenericImages;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("GenericImages")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("GenericImages");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set GenericImages - Generic Images
* @param \Pimcore\Model\DataObject\Data\ImageGallery|null $GenericImages
* @return \Pimcore\Model\DataObject\Media
*/
public function setGenericImages(?\Pimcore\Model\DataObject\Data\ImageGallery $GenericImages)
{
	$this->GenericImages = $GenericImages;

	return $this;
}

}

