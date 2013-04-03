<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1364986803 


namespace Moneta\Types;

/**
 * Тип, описывающий параметры операции в запросах.
	 * Transaction parameters type for requests.
	 * 
 */
class TransactionRequestType extends Entity
{
	
	/**
	 * Номер счета плательщика
	 * Payer account number
	 * 
	 *
	 * @var long
	 */
	 public $payer = null;

	/**
	 * Номер счета получателя
	 * Payee account number
	 * 
	 *
	 * @var long
	 */
	 public $payee = null;

	/**
	 * Сумма операции.
	 * Если флаг isPayerAmount отсутствует
	 * и пользователь имеет доступ только к счету плательщика,
	 * то интерпретируется как сумма к списанию (в валюте плательщика).
	 * Если флаг isPayerAmount отсутствует
	 * и пользователь имеет доступ только к счету получателя,
	 * то интерпретируется как сумма к зачислению (в валюте получателя).
	 * Transaction amount.
	 * If isPayerAmount is omitted
	 * and user has access only to payer account,
	 * then is interpreted as debit amount (in payer's currency).
	 * If isPayerAmount is omitted
	 * and user has access only to payee account,
	 * then is interpreted as credit amount (in payee's currency).
	 * 
	 *
	 * @var decimal
	 */
	 public $amount = null;

	/**
	 * Если пользователь имеет доступ как к счету плательщика, так и счету получателя,
	 * то флаг isPayerAmount обязателен.
	 * Если флаг isPayerAmount установлен (true), то amount используется как сумма к списанию (в валюте плательщика).
	 * Если флаг isPayerAmount сброшен (false), то amount используется как сумма к зачислению (в валюте получателя).
	 * If user has access to both accounts, then isPayerAmount flag is obligatory.
	 * If isPayerAmount flag is "true", then amount is used as debit amount (in payer's currency).
	 * If isPayerAmount flag is "false", then amount is used as credit amount (in payee's currency).
	 * 
	 *
	 * @var boolean
	 */
	 public $isPayerAmount = null;

	/**
	 * Платежный пароль счета плательщика
	 * Payment password for payer account
	 * 
	 *
	 * @var normalizedString
	 */
	 public $paymentPassword = null;

	/**
	 * Внешний номер операции
	 * External transaction ID
	 * 
	 *
	 * @var string
	 */
	 public $clientTransaction = null;

	/**
	 * Описание операции
	 * Transaction description or comments
	 * 
	 *
	 * @var normalizedString
	 */
	 public $description = null;

	/**
	 * Набор полей, которые необходимо сохранить в качестве атрибутов операции. Значения дат в формате dd.MM.yyyy HH:mm:ss
	 * Key-value pairs that will be saved as a transaction attributes. Use format dd.MM.yyyy HH:mm:ss for date values
	 * 
	 *
	 * @var OperationInfo
	 */
	 public $operationInfo = null;

	/**
	 * Запрос для платежного пароля
	 * Payment password challenge
	 * 
	 *
	 * @var string
	 */
	 public $paymentPasswordChallenge = null;

}
?>