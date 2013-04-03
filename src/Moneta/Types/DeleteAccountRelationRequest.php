<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1364986803 


namespace Moneta\Types;

/**
 * Запрос на удаление делегированного доступа к счету.
	 * Request for deletion of access delegation.
	 * 
 */
class DeleteAccountRelationRequest
{
	
	/**
	 * Номер счета в системе МОНЕТА.РУ.
	 * Account number.
	 * 
	 *
	 * @var long
	 */
	 public $accountId = null;

	/**
	 * Email пользователя.
	 * User's Email.
	 * 
	 *
	 * @var string
	 */
	 public $principalEmail = null;

}
?>