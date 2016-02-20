<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Ответ на запрос FindBankAccountsRequest.
	 * Response to FindBankAccountsRequest.
	 * 
 */
class FindBankAccountsResponse
{
	
	/**
	 * 
	 *
	 * @var BankAccount
	 */
	 public $bankAccount = null;

	/**
	 * 
	 *
	 * @param BankAccount
	 *
	 * @return void
	 */
	public function addBankAccount(BankAccount $item)
	{
		$this->bankAccount[] = $item;
	}

}
