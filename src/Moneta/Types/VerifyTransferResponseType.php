<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Тип, описывающий состояние операции в системе МОНЕТА.РУ.
	 * MONETA.RU verification status of a transaction.
	 * 
 */
class VerifyTransferResponseType
{
	
	/**
	 * Если поле равно true, то данная операция может быть проведена в системе МОНЕТА.РУ
	 * If this element is set to true, MONETA.RU can process the specified transaction.
	 * 
	 *
	 * @var boolean
	 */
	 public $isTransactionValid = null;

	/**
	 * Описание текущего статуса операции.
	 * Description of the current transaction status.
	 * 
	 *
	 * @var string
	 */
	 public $description = null;

	/**
	 * Если операция может быть проведена, то в данном поле содержатся детали операции. Иначе - это поле пустое.
	 * If the transaction is valid, this element includes additional information about the transaction. If MONETA.RU cannot process the transaction, this element is empty.
	 * 
	 *
	 * @var ForecastTransactionResponseType
	 */
	 public $forecast = null;

	/**
	 * Поле содержит код ошибки. Поле заполнено только тогда, когда есть описание ошибки в поле description.
	 * Для получения этого поля в запросе необходимо выставлять атрибут version равный или больше VERSION_2.
	 * Коды ошибок совпадают со значением элемента faultDetail (смотрите описание для этого элемента).
	 * If an error occurs when processing a transaction, the errorCode element contains an error code.
	 * MONETA.RU returns this element only if you set the version attribute of your request to VERSION_2 or higher.
	 * See the faultDetail element for the error code descriptions.
	 * 
	 *
	 * @var string
	 */
	 public $errorCode = null;

	/**
	 * Дополнительные свойства операции.
	 * Для получения этого поля в запросе необходимо выставлять атрибут version равный или больше VERSION_2.
	 * Если в ответе придет поле с ключом paymentPasswordChallengeRequired и значением true, то перед проведением операции следует сделать запрос "GetAccountPaymentPasswordChallengeRequest", который вернет строку запроса для платежного пароля. Это значение необходимо использовать в поле "paymentPasswordChallenge" в запросах на проведение операции (например: "PaymentRequest", "TransferRequest", "AuthoriseTransactionRequest" и т.д.).
	 * Additional transaction details.
	 * MONETA.RU returns operationInfo only if you set the version attribute of your request to VERSION_2 or higher.
	 * If the response includes the paymentPasswordChallengeRequired key with the true value in the attribute element, you must call GetAccountPaymentPasswordChallengeRequest for the payer's account to retrieve the paymentPasswordChallenge element. This element is used in such requests as PaymentRequest, TransferRequest, AuthoriseTransactionRequest.
	 * 
	 *
	 * @var OperationInfo
	 */
	 public $operationInfo = null;

}
