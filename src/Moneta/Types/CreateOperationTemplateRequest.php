<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Запрос на создание шаблона операции.
	 * Можно создавать шаблоны с типами:
	 * OperationTemplateType.COMMON
	 * OperationTemplateType.REGULAR
	 * 
 */
class CreateOperationTemplateRequest extends OperationTemplate
{
	
	/**
	 * Платежный пароль счета плательщика.
	 * Поле необходимо указывать, если создается шаблон для регулярного выполнения (с типом OperationTemplateType.REGULAR).
	 * Payment password for the payer's account.
	 * 
	 *
	 * @var AbstractAttributeObject
	 */
	 public $paymentPassword = null;

}
