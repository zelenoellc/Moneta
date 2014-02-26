<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1393417765 


namespace Moneta\Types;

/**
 * Тип, расширяющий KeyValueAttribute.
	 * Поле approved показывает проверено или нет данное свойство. Поле approved - не обязательное.
	 * Поле published показывает доступно или нет чтение свойства для всех пользователей. Поле published - не обязательное.
	 * Extended KeyValueAttribute Type.
	 * Approved element shows if attribute value is approved or not. Approved element is optional.
	 * Published element shows if attribute value is available for reading for all users. Published element is optional.
	 * 
 */
class KeyValueApprovedAttribute extends KeyValueAttribute
{
	
	/**
	 * 
	 *
	 * @var boolean
	 */
	 public $approved = null;

	/**
	 * Для чтения этого атрибута в запросе необходимо выставлять атрибут version равный или больше VERSION_2.
	 * Для записи version можно не указывать.
	 * The value "VERSION_2" of request's attribute "version" is required for reading of this attribute.
	 * The request's attribute "version" for writing is optional.
	 * 
	 *
	 * @var boolean
	 */
	 public $published = null;

}
?>