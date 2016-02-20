<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Ответ на запрос CancelTransactionBatchRequest.
	 * Response to a transaction cancellation request in batch mode.
	 * 
 */
class CancelTransactionBatchResponse
{
	
	/**
	 * Детали проведенных операций, либо описание ошибок, если операция не проведена. Порядок соответствует набору операций, переданных в CancelTransactionBatchRequest.
	 * Either information about completed transactions or error descriptions in the same order as in CancelTransactionBatchRequest.
	 * 
	 *
	 * @var CancelTransactionBatchResponseType
	 */
	 public $transaction = null;

	/**
	 * Детали проведенных операций, либо описание ошибок, если операция не проведена. Порядок соответствует набору операций, переданных в CancelTransactionBatchRequest.
	 * Either information about completed transactions or error descriptions in the same order as in CancelTransactionBatchRequest.
	 * 
	 *
	 * @param CancelTransactionBatchResponseType
	 *
	 * @return void
	 */
	public function addTransaction(CancelTransactionBatchResponseType $item)
	{
		$this->transaction[] = $item;
	}

}
