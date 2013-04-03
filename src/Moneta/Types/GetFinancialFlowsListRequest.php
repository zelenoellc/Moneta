<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1364986803 


namespace Moneta\Types;

/**
 * Получение информации о финансовых потоках.
	 * Если данные не найдены, то size в ответе равен 0.
	 * Financial flow information request.
	 * Response element "size" is 0 if no data found.
	 * 
 */
class GetFinancialFlowsListRequest
{
	
	/**
	 * ID пользователя в системе МОНЕТА.РУ. Если это поле не задано, то используется текущий пользователь. Необязательное поле.
	 * Structure identificator in MONETA.RU. If omitted authenticated user's structure is used. Optional.
	 * 
	 *
	 * @var long
	 */
	 public $unitId = null;

	/**
	 * Дата начала финансового потока. Дата берется с начала указанного месяца.
	 * Financial flow starting date. Only year and month is taken.
	 * 
	 *
	 * @var date
	 */
	 public $dateFrom = null;

	/**
	 * Дата окончания финансового потока.
	 * В дате устанавливается конец указанного месяца.
	 * Если дата не установлена, то берется конец месяца из даты dateFrom.
	 * Период просмотра финансовых потоков не может быть больше 3 месяцев.
	 * Financial flow ending date.
	 * The end of given month is taken.
	 * If omitted the month of "dateFrom" is taken.
	 * The time period between "dateFrom" and "dateTo" is limited to 3 months.
	 * 
	 *
	 * @var date
	 */
	 public $dateTo = null;

	/**
	 * Список счетов, которые учитываются в финансовом потоке
	 * Accounts numbers for financial flow
	 * 
	 *
	 * @var long
	 */
	 public $accountIds = null;

	/**
	 * Список счетов, которые учитываются в финансовом потоке
	 * Accounts numbers for financial flow
	 * 
	 *
	 * @param long
	 *
	 * @return void
	 */
	public function addAccountIds(long $item)
	{
		$this->accountIds[] = $item;
	}

	/**
	 * Валюта, которая учитывается в финансовом потоке
	 * Currency of accounts for financial flow
	 * 
	 *
	 * @var string
	 */
	 public $currencyCode = null;

	/**
	 * Категория операций, которая учитывается в финансовом потоке
	 * Category of operations for financial flow
	 * 
	 *
	 * @var string
	 */
	 public $operationTypeCategory = null;

	/**
	 * Расходные или приходные операции. При отсутствии этого поля учитываются все операции.
	 * Either debits or credits. If omitted, all transfers are considered
	 * 
	 *
	 * @var string
	 */
	 public $operationAmountType = null;

	/**
	 * Если categoryDetails=true, то в ответе делается группировка по категориям операций
	 * If flag is switched on, financial flows will be grouped by its category
	 * 
	 *
	 * @var boolean
	 */
	 public $categoryDetails = null;

	/**
	 * Если hideCorrespondentData=true, то в ответе не возвращаются суммы корреспондента
	 * Hide correspondent's amounts in financial flows
	 * 
	 *
	 * @var boolean
	 */
	 public $hideCorrespondentData = null;

	/**
	 * Дополнительные атрибуты запроса
	 * Additional request parameters
	 * 
	 *
	 * @var KeyValueAttribute
	 */
	 public $attribute = null;

	/**
	 * Дополнительные атрибуты запроса
	 * Additional request parameters
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

	/**
	 * Состояние операций в данном финансовом потоке. Если это поле не установлено - то потоки со всеми состояниями
	 * Financial flow transactions state. All states if this field is empty
	 * 
	 *
	 * @var string
	 */
	 public $operationStatusState = null;

}
?>