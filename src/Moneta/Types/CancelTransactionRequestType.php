<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1393417765 


namespace Moneta\Types;

/**
 * Тип для запроса на отмену операции.
	 * Transaction cancelation request type.
	 * 
 */
class CancelTransactionRequestType
{
	
	/**
	 * Номер операции
	 * Transaction ID
	 * 
	 *
	 * @var long
	 */
	 public $transactionId = null;

	/**
	 * Код протекции
	 * Protection code
	 * 
	 *
	 * @var string
	 */
	 public $protectionCode = null;

	/**
	 * Описание операции
	 * Transaction description or comments
	 * 
	 *
	 * @var normalizedString
	 */
	 public $description = null;

}
?>