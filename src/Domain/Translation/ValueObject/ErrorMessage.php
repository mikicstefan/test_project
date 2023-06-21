<?php

declare(strict_types=1);

namespace RectangleHealth\PMBForms\Domain\Translation\ValueObject;

/**
 * Class ErrorMessage
 * Encapsulates all error messages
 *
 * @package RectangleHealth\PMBForms\Domain\Translation\ValueObject
 * @author DEVŌT <devot.team>
 * @copyright Rectangle Health - Consent To Dental Imagery
 */
final class ErrorMessage
{
  /**
   * Should not be instantiated
   */
  private function __construct()
  {
  }

  // region Decoding and Encoding Error Messages
  public const ERR_REQUEST_DECODING_FAILED = 'ERR_REQUEST_DECODING_FAILED';
  public const ERR_RESPONSE_ENCODING_FAILED = 'ERR_RESPONSE_ENCODING_FAILED';
  public const ERR_REQUEST_BODY_DECODING_ERROR = 'ERR_REQUEST_BODY_DECODING_ERROR';
  public const ERR_UNACCEPTABLE_REQUEST_BODY_TYPE = 'ERR_UNACCEPTABLE_REQUEST_BODY_TYPE';
  // endregion Decoding and Encoding Error Messages

  // region General Error Messages
  public const ERR_PAGE_NUMBER_INVALID = 'ERR_PAGE_NUMBER_INVALID';
  public const ERR_PAGE_NUMBER_MUST_BE_NUMERIC = 'ERR_PAGE_NUMBER_MUST_BE_NUMERIC';
  public const ERR_PAGE_OFFSET_INVALID = 'ERR_PAGE_OFFSET_INVALID';
  public const ERR_PAGE_OFFSET_MUST_BE_NUMERIC = 'ERR_PAGE_OFFSET_MUST_BE_NUMERIC';
  public const ERR_PAGE_PROVIDE_EITHER_OFFSET_OR_NUMBER = 'ERR_PAGE_PROVIDE_EITHER_OFFSET_OR_NUMBER';
  public const ERR_PAGE_SIZE_MUST_BE_INTEGER = 'ERR_PAGE_SIZE_MUST_BE_INTEGER';
  public const ERR_PAGE_SIZE_INVALID = 'ERR_PAGE_SIZE_INVALID';
  public const ERR_SORT_COLUMN_MUST_BE_STRING = 'ERR_SORT_COLUMN_MUST_BE_STRING';
  public const ERR_SORT_COLUMN_NOT_RECOGNIZED = 'ERR_SORT_COLUMN_NOT_RECOGNIZED';
  public const ERR_SORT_DIRECTION_MUST_BE_STRING = 'ERR_SORT_DIRECTION_MUST_BE_STRING';
  public const ERR_SORT_DIRECTION_INVALID = 'ERR_SORT_DIRECTION_INVALID';
  public const ERR_CONSTANT_DO_NOT_EXIST = 'Constant "%s" do not exist';
  public const ERR_ENTITY_NOT_FOUND = '%s not found';
  // region General Error Messages

  // region Endpoint Error Messages
  public const ERR_ENDPOINT_NOT_FOUND = 'ERR_ENDPOINT_NOT_FOUND';
  public const ERR_METHOD_NOT_ALLOWED = 'ERR_METHOD_NOT_ALLOWED';
  public const ERR_ACCESS_DENIED = 'ERR_ACCESS_DENIED';
  // region Endpoint Error Messages

  // region Merchant Group Error Messages
  public const ERR_MERCHANT_GROUP_NOT_FOUND = 'ERR_MERCHANT_GROUP_NOT_FOUND';
  public const ERR_MERCHANT_GROUP_FIELD_UUID_MUST_BE_UNIQUE = 'ERR_MERCHANT_GROUP_FIELD_UUID_MUST_BE_UNIQUE';
  public const ERR_MERCHANT_GROUP_EITHER_NAME_OR_UUID_SHOULD_BE_PROVIDED =
    'ERR_MERCHANT_GROUP_EITHER_NAME_OR_UUID_SHOULD_BE_PROVIDED';
  // endregion Merchant Group Error Messages


  // region Merchant Account Error Messages
  public const ERR_MERCHANT_ACCOUNT_NOT_FOUND = 'ERR_MERCHANT_ACCOUNT_NOT_FOUND';
  public const ERR_MERCHANT_ACCOUNT_FIELD_UUID_MUST_BE_UNIQUE = 'ERR_MERCHANT_ACCOUNT_FIELD_UUID_MUST_BE_UNIQUE';
  // endregion Merchant Account Error Messages

  // region Form Error Messages
  public const ERR_FORM_NOT_FOUND = 'ERR_FORM_NOT_FOUND';
  public const ERR_FORM_FIELD_INVITATION_UUID_MUST_BE_UNIQUE = 'ERR_FORM_FIELD_INVITATION_UUID_MUST_BE_UNIQUE';
  public const ERR_FORM_FIELD_UUID_MUST_BE_UNIQUE = 'ERR_FORM_FIELD_UUID_MUST_BE_UNIQUE';
  public const ERR_FORM_FIELD_NAME_MUST_BE_UNIQUE = 'ERR_FORM_FIELD_NAME_MUST_BE_UNIQUE';
  public const ERR_FORM_FIELD_NAME_CANNOT_BE_NULL = 'ERR_FORM_FIELD_NAME_CANNOT_BE_NULL';
  public const ERR_FORM_FIELD_NAME_MUST_BE_UNIQUE_BY_MERCHANT_GROUP =
    'ERR_FORM_FIELD_NAME_MUST_BE_UNIQUE_BY_MERCHANT_GROUP';
  public const ERR_FORM_FIELD_NAME_MUST_BE_UNIQUE_BY_STANDARD_TYPE =
    'ERR_FORM_FIELD_NAME_MUST_BE_UNIQUE_BY_STANDARD_TYPE';
  public const ERR_FORM_FIELD_NAME_MUST_BE_UNIQUE_BY = 'ERR_FORM_FIELD_NAME_MUST_BE_UNIQUE_BY_';
  public const ERR_FORM_STATUS_INVALID_TRANSITION = 'Form status cannot be changed from "%s" to "%s"';
  public const ERR_FORM_DELETE_FROM_WRONG_STATUS = 'Form in status "%s" cannot be deleted';
  public const ERR_FORM_UNPROCESSABLE_ENTITY = 'Either question_set or temporary_question_set can be sent';
  public const ERR_FORM_ALREADY_DELETED = 'Form has already been deleted';
  // endregion Form Error Messages

  // region Save Form Values
  public const ERR_FORM_NOT_VALID_DATE_FORMAT = 'Provided date %s for question"%s"does not have valid format';
  public const ERR_FORM_VALUE_NUMERIC_TYPE = 'Value for question "%s" must be numeric';

  public const ERR_FORM_VALUE_REQUIRED = 'Please provide the required input for question "%s"';
  public const ERR_FORM_VALUE_MINLENGTH = 'Value for question "%s" should have at least %d characters';
  public const ERR_FORM_VALUE_MAXLENGTH = 'Value for question "%s" should have max %d characters';
  public const ERR_FORM_VALUE_LENGTH = 'Value for question "%s" should have exactly %d characters';
  public const ERR_FORM_VALUE_EMAIL = 'Value for question "%s" is not a valid email address';
  public const ERR_FORM_VALUE_POSSIBLECHOICES = 'Value for question "%s" must be one of possible choices';
  public const ERR_FORM_VALUE_UNKNOWN_VALIDATION = 'Invalid validation "%s" for question "%s"';
  public const ERR_FORM_VALUE_FORMAT = 'Value for question "%s" should be in format %s';
  public const ERR_FORM_VALUE_READONLYFIELDPLACEHOLDERS =
    'Authorization to Charge Card Agreement must have correct Merchant Account and Cardholder information';
  public const ERR_FORM_VALUE_CCNUMBER = 'Value for question "%s" is not valid';

  public const ERR_FORM_VALUE_CCACCEPTEDCARDS =
    'This card type is not supported. Please enter a valid credit card number (15 or 16 digits only)';
  public const ERR_FORM_VALUE_CCEXPDATE = 'Card is expired';
  public const ERR_FORM_VALUE_CCEXPDATEFORMAT = 'Please enter a valid Expiration Date (MM/YY)';
  public const ERR_FORM_VALUE_LESSTHANYEARS = 'Value for question "%s" must be less than %d years';
  public const ERR_FORM_VALUE_EXACTVALUE = 'Value for question "%s" equal to "%s"';
  public const ERR_FORM_VALUE_DATEMUSTBEINPAST = 'Date must be in the past';
  public const ERR_FORM_VALUE_TODAYDATE = 'Date must be today\'s date';
  // endregion Save Form Values

  // region Soft Delete
  public const ERR_SOFT_DELETE_ENTITY_NOT_CONFIGURED = 'Soft delete is not configured for entity';
  // endregion Soft Delete

  // region payment-sdk
  public const ERR_VAULT_CANNOT_BE_CREATED = 'Error Processing Request: Could not create the vault.';
  public const ERR_VAULT_ALREADY_EXIST = 'Internal error detected, is possible the vault already exist';
  public const ERR_PUT_PAYMENT_METHOD = 'Error occur during put payment method function';
  // endregion payment-sdk

  // region JSON
  public const ERR_INVALID_JSON = 'JSON with invalid structure provided';
  public const ERR_INVALID_JSON_OCCUR = 'Error occur in ';
  public const ERR_INVALID_JSON_MUST_HAVE_PAGES = 'Question set must have "pages" array';

  // error message for deserialization
  public const ERR_INVALID_JSON_INVALID_KEY_VALUE = 'Error occur in "%s": "%s"';
  public const ERR_INVALID_JSON_INVALID_TYPE = 'The type must be one of "%s" ("%s" given).';

  // error messages in validator
  public const ERR_INVALID_JSON_FORM_MISSING_KEY = 'Form should have key "%s"';
  public const ERR_INVALID_JSON_PAGE_INVALID_KEY = 'Error occur on page at index "%s": "%s"';
  public const ERR_INVALID_JSON_SECTION_INVALID_KEY = 'Error occur in section at index "%s" on page with id "%s": "%s"';
  public const ERR_INVALID_JSON_SUBSECTION_INVALID_KEY =
    self::ERR_INVALID_JSON_OCCUR . 'subsection at index "%s" in section with id "%s": "%s"';
  public const ERR_INVALID_JSON_ELEMENT_INVALID_KEY =
    self::ERR_INVALID_JSON_OCCUR . 'element at index "%s" in subsection with id "%s": "%s"';
  public const ERR_INVALID_JSON_ELEMENT_ARRAYS_INVALID_FORMAT =
    self::ERR_INVALID_JSON_OCCUR . 'element with id "%s": "%s" array should have objects with keys: "%s"';
  public const ERR_INVALID_JSON_MISSING_KEY_OR_EMPTY_ARRAY = 'Key "%s" must exist and cannot be empty array';
  public const ERR_INVALID_JSON_NOT_SUPPORTED_VALUE =
    self::ERR_INVALID_JSON_OCCUR . 'element with id "%s": Key "%s" should have one of the values "%s"';
  // endregion JSON

  // region CommunicationMechanism
  public const ERR_COMMUNICATION_MECHANISM_FIELD_UUID_MUST_BE_UNIQUE =
    'ERR_COMMUNICATION_MECHANISM_FIELD_UUID_MUST_BE_UNIQUE';
  // endregion CommunicationMechanism

  // region MPD
  public const ERR_MPD_NOT_AVAILABLE = 'Checking of security code is not currently possible.';
  public const ERR_MPD_SECURITY_CODE_INCORRECT = 'The verification code provided is incorrect.';
  public const ERR_MPD_SECURITY_CODE_EXPIRED = 'The verification code provided is no longer valid.';
  public const ERR_MPD_REGISTRATION_ALREADY_COMPLETED = 'Registration is already Completed';
  public const ERR_MPD_REGISTRATION_ALREADY_VERIFIED =
    'Registration has already been verified, resend verification if you wish to re-verify';
  // endregion MPD

  // region FormLink
  public const ERR_FORM_LINK_COMMUNICATION_MECHANISMS_SHOULD_BE_PROVIDED =
    'Form Link: Communication Mechanisms should be provided';
  public const ERR_COMMUNICATION_MECHANISM_DOES_NOT_BELONG_TO_FORM_LINK =
    'Communication Link does not belong to Form Link';
  public const ERR_CURRENT_PAGE_IS_NOT_FROM_PAGE_LIST = '"%s" is not valid page';
  public const ERR_FORM_LINK_CANNOT_BE_CREATED_FOR_GIVEN_FORM =
    'Form Link can not be created for form that is not in status "%s"';
  // endregion FormLink

  // region MPD errors
  public const ERR_MPD_VERIFICATION_CANNOT_BE_SEND = 'The verification code could not be sent';
  public const ERR_MPD_COMMUNICATION_MECHANISM_IS_NOT_VALID = 'There was an error sending the Email or Text';
  public const ERR_MPD_REGISTRATION_CANNOT_BE_MARK_AS_FINISHED = 'Registration cannot be mark as finished';
  public const ERR_MPD_SERVICE_EXCEPTION = 'MPD service returned an error';
  // endregion MPD errors
  
  // region User
  public const ERR_USER_FIELD_UUID_MUST_BE_UNIQUE = 'ERR_USER_FIELD_UUID_MUST_BE_UNIQUE';
  public const ERR_USER_FIELD_USERNAME_MUST_BE_UNIQUE = 'ERR_USER_FIELD_USERNAME_MUST_BE_UNIQUE';
  // endregion User
}
