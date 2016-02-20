<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Ответ на запрос FindAccountRelationsRequest.
	 * Response to FindAccountRelationRequest.
	 * 
 */
class FindAccountRelationsResponse
{
	
	/**
	 * Список найденных пользователей, которые имеют делегированный доступ к указанному счету. Если пользователей нет - список пустой.
	 * The list of users who have delegated access to the specified account. If MONETA.RU finds no users, the response contains an empty list.
	 * 
	 *
	 * @var AccountRelation
	 */
	 public $accountRelation = null;

	/**
	 * Список найденных пользователей, которые имеют делегированный доступ к указанному счету. Если пользователей нет - список пустой.
	 * The list of users who have delegated access to the specified account. If MONETA.RU finds no users, the response contains an empty list.
	 * 
	 *
	 * @param AccountRelation
	 *
	 * @return void
	 */
	public function addAccountRelation(AccountRelation $item)
	{
		$this->accountRelation[] = $item;
	}

}
