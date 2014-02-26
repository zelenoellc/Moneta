<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1393417765 


namespace Moneta\Types;

/**
 * Тип, описывающий атрибуты операции в ответах в пакетном запросе.
	 * Transaction attributes type for responses in batch processing mode.
	 * 
 */
class TransactionBatchResponseType
{
	
	/**
	 * Поле содержит описание ошибки, если операция не была проведена.
	 * В этом случае поле transaction - пустое. Если операция проведена,
	 * то поле error пустое, а поле transaction содержит детали операции.
	 * Error description in case of tranfer processing failure.
	 * If transfer processed successfully "error" is empty
	 * and "transaction" element contains transaction details.
	 * 
	 *
	 * @var string
	 */
	 public $error = null;

	/**
	 * 
	 *
	 * @var TransactionResponseType
	 */
	 public $transaction = null;

	/**
	 * Поле содержит код ошибки. Поле заполнено только тогда, когда есть описание ошибки в поле error.
	 * Для получения этого поля в запросе необходимо выставлять атрибут version равный или больше VERSION_2.
	 * Коды ошибок совпадают со значением элемента faultDetail (смотрите описание для этого элемента).
	 * The field contains error code. The field "errorCode" is specified if the field "error" is present and contains error description.
	 * For retrieving errorCode the request attribute "version" has to be set to "VERSION_2" or greater.
	 * Error codes values correspond to "faultDetail" description.
	 * 
	 *
	 * @var string
	 */
	 public $errorCode = null;

}
?>