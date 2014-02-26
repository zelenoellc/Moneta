<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1393417765 


namespace Moneta\Types;

/**
 * Ответ на запрос FindProfileInfoByAccountIdRequest.
	 * Profile information by account number searching response.
	 * 
 */
class FindProfileInfoByAccountIdResponse
{
	
	/**
	 * Номер счета пользователя в системе МОНЕТА.РУ
	 * Account number in MONETA.RU
	 * 
	 *
	 * @var long
	 */
	 public $accountId = null;

	/**
	 * Валюта счета
	 * Currency of account
	 * 
	 *
	 * @var string
	 */
	 public $currency = null;

	/**
	 * Данные пользователя в системе МОНЕТА.РУ
	 * User profile information in MONETA.RU
	 * 
	 *
	 * @var Profile
	 */
	 public $profile = null;

}
?>