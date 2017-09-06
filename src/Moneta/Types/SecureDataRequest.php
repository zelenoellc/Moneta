<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Запрос на сохранение свойств, которые можно использовать в дальнейшем с помощью SECURETOKEN.
	 * Attributes preservation request.
	 * 
 */
class SecureDataRequest
{
	
	/**
	 * Публичный идентификатор.
	 * Public ID.
	 * 
	 *
	 * @var string
	 */
	 public $publicId = null;

	/**
	 * Номер счета.
	 * Поле следует заполнить, если данные этого запроса будут использоваться для проведения финансовой операции.
	 * Например, PaymentRequest, TransferRequest, AuthoriseTransactionRequest, ConfirmTransactionRequest и т.д.
	 * При проведении операции следует указать этот же самый номер счета - для другого счета эти данные использовать нельзя.
	 * Account ID.
	 * 
	 *
	 * @var long
	 */
	 public $accountId = null;

	/**
	 * Свойства, которые надо сохранить.
	 * Attributes for preservation.
	 * 
	 *
	 * @var KeyValueAttribute
	 */
	 public $attribute = null;

	/**
	 * Свойства, которые надо сохранить.
	 * Attributes for preservation.
	 * 
	 *
	 * @param KeyValueAttribute
	 *
	 * @return void
	 */
	public function addAttribute(KeyValueAttribute $item)
	{
		$this->attribute[] = $item;
	}

}
