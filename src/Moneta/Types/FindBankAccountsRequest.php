<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Запрос на получение банковских реквизитов по ID пользователя. Если данные не найдены, возвращается пустой список.
	 * Request for bank account details by a user ID. MONETA.RU returns an empty list if it cannot find bank account details.
	 * 
 */
class FindBankAccountsRequest extends Entity
{
	
	/**
	 * ID пользователя в системе МОНЕТА.РУ. Если это поле не задано, то используется текущий пользователь.
	 * User ID. If you omit this element, MONETA.RU uses the ID of the user who sends the request.
	 * 
	 *
	 * @var long
	 */
	 public $unitId = null;

	/**
	 * 
	 * 
	 *
	 * @var long
	 */
	 public $profileId = null;

}
