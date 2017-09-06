<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Тип, описывающий атрибуты счета в системе МОНЕТА.РУ.
	 * Information about a MONETA.RU account.
	 * 
 */
class AccountInfo
{
	
	/**
	 * Номер счета в системе МОНЕТА.РУ.
	 * MONETA.RU account number.
	 * 
	 *
	 * @var long
	 */
	 public $id = null;

	/**
	 * Валюта данного счета.
	 * Currency of the specified account.
	 * 
	 *
	 * @var string
	 */
	 public $currency = null;

	/**
	 * Баланс на данном счете.
	 * Current balance of account
	 * 
	 *
	 * @var decimal
	 */
	 public $balance = null;

	/**
	 * Доступный баланс на данном счете.
	 * Account balance.
	 * 
	 *
	 * @var decimal
	 */
	 public $availableBalance = null;

	/**
	 * Тип счета в системе МОНЕТА.РУ.
	 * MONETA.RU account type.
	 * 
	 *
	 * @var int
	 */
	 public $type = null;

	/**
	 * Статус счета в системе МОНЕТА.РУ.
	 * Status of the MONETA.RU account.
	 * 
	 *
	 * @var int
	 */
	 public $status = null;

	/**
	 * Название счета в системе МОНЕТА.РУ.
	 * Account alias.
	 * 
	 *
	 * @var string
	 */
	 public $alias = null;

	/**
	 * URL после списания средств.
	 * Specifies the URL of the script that MONETA.RU calls after debiting the payer's account.
	 * 
	 *
	 * @var string
	 */
	 public $onSuccessfulDebitUrl = null;

	/**
	 * URL после зачисления средств.
	 * Specifies the URL of the script that MONETA.RU calls after crediting the payee's account.
	 * 
	 *
	 * @var string
	 */
	 public $onSuccessfulCreditUrl = null;

	/**
	 * Код проверки целостности данных.
	 * Signature that MONETA.RU uses to verify data integrity submitted from a payment form.
	 * 
	 *
	 * @var string
	 */
	 public $signature = null;

	/**
	 * Если баланс счета меньше данного значения, то раз в сутки уходит уведомление об этом событии.
	 * Specifies the minimum balance threshold for an account. If the balance drops below the threshold, MONETA.RU sends daily notifications to the account owner.
	 * 
	 *
	 * @var decimal
	 */
	 public $lowBalanceThreshold = null;

	/**
	 * Если баланс счета больше данного значения, то раз в сутки уходит уведомление об этом событии.
	 * Specifies the maximum balance threshold for an account. If the balance exceeds the threshold, MONETA.RU sends daily notifications to the account owner.
	 * 
	 *
	 * @var decimal
	 */
	 public $highBalanceThreshold = null;

	/**
	 * Информация о доступе к счету. Информация отдается, если счет является делегированным.
	 * Account access information. MONETA.RU provides this information if the account is delegated. If the account is not delegated, this element is omitted.
	 * 
	 *
	 * @var AccountAccessInfo
	 */
	 public $accountAccess = null;

	/**
	 * Счет-прототип с которого берутся свойства "по умолчанию".
	 * Prototype account number. Settings from this account are used as default values.
	 * 
	 *
	 * @var long
	 */
	 public $prototypeAccountId = null;

	/**
	 * URL после отмены списания средств.
	 * Specifies the URL of the script that MONETA.RU calls if a debit transaction is canceled.
	 * 
	 *
	 * @var string
	 */
	 public $onCancelledDebitUrl = null;

	/**
	 * URL после отмены зачисления средств.
	 * Specifies the URL of the script that MONETA.RU calls if a deposit transaction is canceled.
	 * 
	 *
	 * @var string
	 */
	 public $onCancelledCreditUrl = null;

	/**
	 * Дополнительные свойства счета.
	 * Для получения этого поля в запросе необходимо выставлять атрибут version равный или больше VERSION_2.
	 * Возможные ключи:
	 * paymentPasswordType - тип платежного пароля.
	 * STATIC. Статический платежный пароль.
	 * SEQUENCE_BY_ORDER. Последовательность по порядку.
	 * SMS_SIMPLE. SMS пароль.
	 * SMS_SESSION. SMS пароль (сессионный).
	 * TOTP_RFC6238. Time-based one-time password algorithm.
	 * paymentPasswordChallengeRequired. Если в ответе придет поле с ключом key="paymentPasswordChallengeRequired"
	 * и значением value="true", то перед проведением операции следует сделать запрос "GetAccountPaymentPasswordChallengeRequest",
	 * который вернет строку запроса для платежного пароля. Это значение необходимо использовать в поле "paymentPasswordChallenge"
	 * в запросах на проведение операции (например: "PaymentRequest", "TransferRequest", "AuthoriseTransactionRequest" и т.д.).
	 * alias. Название счета. В этом свойстве также можно узнать, является ли название счета "публичным".
	 * Additional account attributes.
	 * MONETA.RU returns this element only if you set the version attribute of your request toVERSION_2.
	 * Valid values for the key and value elements:
	 * paymentPasswordType
	 * STATIC. Static payment password.
	 * SEQUENCE_BY_ORDER. Ordered sequence.
	 * SMS_SIMPLE. SMS password.
	 * SMS_SESSION. SMS password (sessional).
	 * TOTP_RFC6238. Time-based one-time password algorithm.
	 * paymentPasswordChallengeRequired. If the response contains an attribute with the key="paymentPasswordChallengeRequired"
	 * and value="true", you must call GetAccountPaymentPasswordChallengeRequest for the payer's account to get the paymentPasswordChallenge element.
	 * This element is used in the following requests: PaymentRequest, TransferRequest, AuthoriseTransactionRequest.
	 * alias. Account alias.
	 * 
	 *
	 * @var KeyValueAttribute
	 */
	 public $attribute = null;

	/**
	 * Дополнительные свойства счета.
	 * Для получения этого поля в запросе необходимо выставлять атрибут version равный или больше VERSION_2.
	 * Возможные ключи:
	 * paymentPasswordType - тип платежного пароля.
	 * STATIC. Статический платежный пароль.
	 * SEQUENCE_BY_ORDER. Последовательность по порядку.
	 * SMS_SIMPLE. SMS пароль.
	 * SMS_SESSION. SMS пароль (сессионный).
	 * TOTP_RFC6238. Time-based one-time password algorithm.
	 * paymentPasswordChallengeRequired. Если в ответе придет поле с ключом key="paymentPasswordChallengeRequired"
	 * и значением value="true", то перед проведением операции следует сделать запрос "GetAccountPaymentPasswordChallengeRequest",
	 * который вернет строку запроса для платежного пароля. Это значение необходимо использовать в поле "paymentPasswordChallenge"
	 * в запросах на проведение операции (например: "PaymentRequest", "TransferRequest", "AuthoriseTransactionRequest" и т.д.).
	 * alias. Название счета. В этом свойстве также можно узнать, является ли название счета "публичным".
	 * Additional account attributes.
	 * MONETA.RU returns this element only if you set the version attribute of your request toVERSION_2.
	 * Valid values for the key and value elements:
	 * paymentPasswordType
	 * STATIC. Static payment password.
	 * SEQUENCE_BY_ORDER. Ordered sequence.
	 * SMS_SIMPLE. SMS password.
	 * SMS_SESSION. SMS password (sessional).
	 * TOTP_RFC6238. Time-based one-time password algorithm.
	 * paymentPasswordChallengeRequired. If the response contains an attribute with the key="paymentPasswordChallengeRequired"
	 * and value="true", you must call GetAccountPaymentPasswordChallengeRequest for the payer's account to get the paymentPasswordChallenge element.
	 * This element is used in the following requests: PaymentRequest, TransferRequest, AuthoriseTransactionRequest.
	 * alias. Account alias.
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
