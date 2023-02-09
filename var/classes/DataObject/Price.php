<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - localizedfields [localizedfields]
 * -- OriginalPrice [numeric]
 * -- Discount [numeric]
 * -- OfferPrice [calculatedValue]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Price\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Price\Listing|\Pimcore\Model\DataObject\Price|null getByLocalizedfields($field, $value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Price\Listing|\Pimcore\Model\DataObject\Price|null getByOriginalPrice($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Price\Listing|\Pimcore\Model\DataObject\Price|null getByDiscount($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Price\Listing|\Pimcore\Model\DataObject\Price|null getByOfferPrice($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Price extends Concrete
{
protected $o_classId = "2";
protected $o_className = "Price";
protected $localizedfields;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Price
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get localizedfields - 
* @return \Pimcore\Model\DataObject\Localizedfield|null
*/
public function getLocalizedfields(): ?\Pimcore\Model\DataObject\Localizedfield
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("localizedfields");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("localizedfields")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Get OriginalPrice - Original Price
* @return float|null
*/
public function getOriginalPrice($language = null): ?float
{
	$data = $this->getLocalizedfields()->getLocalizedValue("OriginalPrice", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("OriginalPrice");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Get Discount - Discount
* @return float|null
*/
public function getDiscount($language = null): ?float
{
	$data = $this->getLocalizedfields()->getLocalizedValue("Discount", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Discount");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Get OfferPrice - Offer Price
* @return \Pimcore\Model\DataObject\Data\CalculatedValue|null
*/
public function getOfferPrice($language = null)
{
	if (!$language) {
		try {
			$locale = \Pimcore::getContainer()->get("pimcore.locale")->getLocale();
			if (\Pimcore\Tool::isValidLanguage($locale)) {
				$language = (string) $locale;
			} else {
				throw new \Exception("Not supported language");
			}
		} catch (\Exception $e) {
			$language = \Pimcore\Tool::getDefaultLanguage();
		}
	}
	$object = $this;
	$fieldDefinition = $this->getClass()->getFieldDefinition("localizedfields")->getFieldDefinition("OfferPrice");
	$data = new \Pimcore\Model\DataObject\Data\CalculatedValue('OfferPrice');
	$data->setContextualData("localizedfield", "localizedfields", null, $language, null, null, $fieldDefinition);
	$data = \Pimcore\Model\DataObject\Service::getCalculatedFieldValue($object, $data);
	return $data;
}

/**
* Set localizedfields - 
* @param \Pimcore\Model\DataObject\Localizedfield|null $localizedfields
* @return \Pimcore\Model\DataObject\Price
*/
public function setLocalizedfields(?\Pimcore\Model\DataObject\Localizedfield $localizedfields)
{
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getLocalizedfields();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$this->markFieldDirty("localizedfields", true);
	$this->localizedfields = $localizedfields;

	return $this;
}

/**
* Set OriginalPrice - Original Price
* @param float|null $OriginalPrice
* @return \Pimcore\Model\DataObject\Price
*/
public function setOriginalPrice (?float $OriginalPrice, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("OriginalPrice", $OriginalPrice, $language, !$isEqual);

	return $this;
}

/**
* Set Discount - Discount
* @param float|null $Discount
* @return \Pimcore\Model\DataObject\Price
*/
public function setDiscount (?float $Discount, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("Discount", $Discount, $language, !$isEqual);

	return $this;
}

/**
* Set OfferPrice - Offer Price
* @param \Pimcore\Model\DataObject\Data\CalculatedValue|null $OfferPrice
* @return \Pimcore\Model\DataObject\Price
*/
public function setOfferPrice($OfferPrice, $language = null)
{
	return $this;
}

}

