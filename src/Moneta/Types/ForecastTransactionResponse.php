<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 
// Timestamp: 1393417765 


namespace Moneta\Types;

/**
 * Ответ на запрос предварительного расчета сумм и комиссий.
	 * Может использоваться для информирования пользователя о приблизительной сумме и комиссии
	 * операции.
	 * Фактические значения могут отличаться, если к моменту проведения операции
	 * доступны новые правила тарификации или новые курсы обмена валют.
	 * Response for preliminary calculation request.
	 * May be used for informing users with approximate amount and fee of transaction.
	 * Actual values may differ if newer financial rules and currency exchange rates
	 * are available at the moment of transaction processing.
	 * 
 */
class ForecastTransactionResponse extends ForecastTransactionResponseType
{
	
}
?>