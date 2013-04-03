<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1364986803 


namespace Moneta\Types;

/**
 * Ответ на запрос завершения операций в пакетном режиме.
	 * Transactions confirmation response in batch processing mode.
	 * 
 */
class ConfirmTransactionBatchResponse
{
	
	/**
	 * Детали проведенных операций, либо описание ошибок, если операция не проведена.
	 * Порядок соответствует набору операций, переданных в ConfirmTransactionBatchRequest.
	 * Either transaction details or error description in order of appearance in corresponding request.
	 * 
	 *
	 * @var OperationInfoBatchResponseType
	 */
	 public $transaction = null;

	/**
	 * Детали проведенных операций, либо описание ошибок, если операция не проведена.
	 * Порядок соответствует набору операций, переданных в ConfirmTransactionBatchRequest.
	 * Either transaction details or error description in order of appearance in corresponding request.
	 * 
	 *
	 * @param OperationInfoBatchResponseType
	 *
	 * @return void
	 */
	public function addTransaction(OperationInfoBatchResponseType $item)
	{
		$this->transaction[] = $item;
	}

}
?>