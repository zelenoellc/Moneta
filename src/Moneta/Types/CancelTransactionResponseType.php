<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1364986803 


namespace Moneta\Types;

/**
 * Тип, описывающий атрибуты при ответе на запрос отмены операции.
	 * Transaction cancelation response type.
	 * 
 */
class CancelTransactionResponseType
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
	 * Статус операции
	 * Transaction status
	 * 
	 *
	 * @var string
	 */
	 public $operationStatus = null;

}
?>