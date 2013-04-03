<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1364986803 


namespace Moneta\Types;

/**
 * Тип для запроса на отмену операций в пакетном режиме.
	 * Batch mode transaction cancelation request type.
	 * 
 */
class CancelTransactionBatchRequestType extends Entity
{
	
	/**
	 * Флаг, указывающий выполнять ли все денежные переводы в одной транзакции.
	 * Если transactional = true, то:
	 * при возникновении ошибки все проведенные операции будут отменены
	 * можно проводить только операции со счетами монеты. Нельзя выводить деньги на внешние платежные системы.
	 * Если transactional = false, то:
	 * при возникновении ошибки все проведенные операции будут сохранены
	 * можно проводить любые операции, которые доступны в TransferRequest
	 * если выставить флаг exitOnFailure = false, то при возникновении ошибки можно пропустить операцию
	 * и продолжить выполнение операций дальше
	 * Joining all transfers in batch processing into one transaction.
	 * True -- all processed transfers will be rolled back on exceptions, no external transfers are allowed.
	 * False -- only current transfer rolled back on exceptions, external transfers are allowed.
	 * 
	 *
	 * @var boolean
	 */
	 public $transactional = null;

	/**
	 * Флаг, указывающий прерывать ли выполнение пакета операций, если произошла ошибка.
	 * Используется только при transactional = false
	 * Stops batch processing on exceptions. Used only in conjunction with transactional=false.
	 * 
	 *
	 * @var boolean
	 */
	 public $exitOnFailure = null;

	/**
	 * Набор операций, которые необходимо выполнить в одном пакете.
	 * Операции выполняются в том порядке, в котором они переданы в запросе.
	 * Set of transfers to be processed in one batch.
	 * Processed in order of appearance.
	 * 
	 *
	 * @var CancelTransactionRequestType
	 */
	 public $transaction = null;

	/**
	 * Набор операций, которые необходимо выполнить в одном пакете.
	 * Операции выполняются в том порядке, в котором они переданы в запросе.
	 * Set of transfers to be processed in one batch.
	 * Processed in order of appearance.
	 * 
	 *
	 * @param CancelTransactionRequestType
	 *
	 * @return void
	 */
	public function addTransaction(CancelTransactionRequestType $item)
	{
		$this->transaction[] = $item;
	}

}
?>