<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Запрос на подтверждение сотового телефона пользователя (поле cell_phone объекта tns:Profile).
	 * Телефон должен быть указан у данного пользователя и неподтвержден.
	 * The first request for the confirmation of the user's phone number that is specified in the cell_phone element of tns:Profile.
	 * Users must confirm their mobile phone numbers in the following cases:
	 * To receive payment passwords to their mobile phones.
	 * To complete the simplified identification procedure.
	 * After you send the ApprovePhoneSendConfirmation request, MONETA.RU sends an SMS messages with a
	 * verification code to the specified mobile phone number. Use the verification code in the ApprovePhoneApplyCode request to confirm the phone number.
	 * 
 */
class ApprovePhoneSendConfirmationRequest
{
	
	/**
	 * ID пользователя в системе МОНЕТА.РУ. Если это поле не задано, то используется текущий пользователь.
	 * The unique identifier of the MONETA.RU user whose phone number must be confirmed. If you omit this element, MONETA.RU uses the ID of the user who sends the request.
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

	/**
	 * Текст sms сообщения, которое отправляется пользователю. Текст должен содержать подстановку {CODE}, которая будет заменена настоящим кодом подтверждения.
	 * Длина сообщения, если не содержит русских букв - 160 символов, если содержит русские буквы - 70 символов.
	 * По умолчанию используется - Код подтверждения: {CODE}.
	 * Text of the SMS message to send to the user. The text must contain the {CODE} placeholder that MONETA.RU replaces with a real confirmation code.
	 * The length of the message that contains non-ASCII characters must not exceed 70 symbols. The length of ASCII messages is limited to 160 symbols.
	 * Default value: Confirmation code: {CODE}
	 * 
	 *
	 * @var string
	 */
	 public $text = null;

}
