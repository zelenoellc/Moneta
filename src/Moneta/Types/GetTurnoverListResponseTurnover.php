<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1393417765 


namespace Moneta\Types;

/**
 * 
 */
class GetTurnoverListResponseTurnover
{
	
	/**
	 * Дата
	 * Date
	 * 
	 *
	 * @var date
	 */
	 public $date = null;

	/**
	 * Счет
	 * Account
	 * 
	 *
	 * @var string
	 */
	 public $account = null;

	/**
	 * Валюта
	 * Currency
	 * 
	 *
	 * @var string
	 */
	 public $currency = null;

	/**
	 * Категория операций (возвращается, если в запросе categoryDetails=true)
	 * Transactions category (if categoryDetails=true in request)
	 * 
	 *
	 * @var string
	 */
	 public $operationTypeCategory = null;

	/**
	 * Приход. Сумма
	 * Income. Amount
	 * 
	 *
	 * @var decimal
	 */
	 public $incomeAmount = null;

	/**
	 * Приход. Комиссия
	 * Income. Commission
	 * 
	 *
	 * @var decimal
	 */
	 public $incomeCommission = null;

	/**
	 * Приход. Количество
	 * Income. Qty
	 * 
	 *
	 * @var long
	 */
	 public $incomeTransactionsCount = null;

	/**
	 * Расход. Сумма
	 * Expenses. Amount
	 * 
	 *
	 * @var decimal
	 */
	 public $expenseAmount = null;

	/**
	 * Расход. В том числе комиссия
	 * Expenses. Including commission
	 * 
	 *
	 * @var decimal
	 */
	 public $expensesIncludingCommission = null;

	/**
	 * Расход. Дополнительная комиссия
	 * Expenses. Extra commission
	 * 
	 *
	 * @var decimal
	 */
	 public $expensesExtraCommission = null;

	/**
	 * Расход. Количество
	 * Expenses. Qty
	 * 
	 *
	 * @var long
	 */
	 public $expenseTransactionsCount = null;

	/**
	 * Итого
	 * Total
	 * 
	 *
	 * @var decimal
	 */
	 public $total = null;

	/**
	 * Входящий остаток
	 * Opening balance
	 * 
	 *
	 * @var decimal
	 */
	 public $openingBalance = null;

	/**
	 * Исходящий остаток
	 * Closing balance
	 * 
	 *
	 * @var decimal
	 */
	 public $closingBalance = null;

}
?>