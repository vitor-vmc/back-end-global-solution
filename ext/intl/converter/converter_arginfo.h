/* This is a generated file, edit the .stub.php file instead.
 * Stub hash: 2a6d8499e1a2d414130e366783a1c084f47a3293 */

ZEND_BEGIN_ARG_INFO_EX(arginfo_class_UConverter___construct, 0, 0, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, destination_encoding, IS_STRING, 1, "null")
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, source_encoding, IS_STRING, 1, "null")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_MASK_EX(arginfo_class_UConverter_convert, 0, 1, MAY_BE_STRING|MAY_BE_FALSE)
	ZEND_ARG_TYPE_INFO(0, str, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, reverse, _IS_BOOL, 0, "false")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_MASK_EX(arginfo_class_UConverter_fromUCallback, 0, 4, MAY_BE_STRING|MAY_BE_LONG|MAY_BE_ARRAY|MAY_BE_NULL)
	ZEND_ARG_TYPE_INFO(0, reason, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, source, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, codePoint, IS_LONG, 0)
	ZEND_ARG_INFO(1, error)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_MASK_EX(arginfo_class_UConverter_getAliases, 0, 1, MAY_BE_ARRAY|MAY_BE_FALSE|MAY_BE_NULL)
	ZEND_ARG_TYPE_INFO(0, name, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_INFO_EX(arginfo_class_UConverter_getAvailable, 0, 0, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_MASK_EX(arginfo_class_UConverter_getDestinationEncoding, 0, 0, MAY_BE_STRING|MAY_BE_FALSE|MAY_BE_NULL)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_MASK_EX(arginfo_class_UConverter_getDestinationType, 0, 0, MAY_BE_LONG|MAY_BE_FALSE|MAY_BE_NULL)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_INFO_EX(arginfo_class_UConverter_getErrorCode, 0, 0, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_INFO_EX(arginfo_class_UConverter_getErrorMessage, 0, 0, IS_STRING, 1)
ZEND_END_ARG_INFO()

#define arginfo_class_UConverter_getSourceEncoding arginfo_class_UConverter_getDestinationEncoding

#define arginfo_class_UConverter_getSourceType arginfo_class_UConverter_getDestinationType

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_INFO_EX(arginfo_class_UConverter_getStandards, 0, 0, IS_ARRAY, 1)
ZEND_END_ARG_INFO()

#define arginfo_class_UConverter_getSubstChars arginfo_class_UConverter_getDestinationEncoding

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_INFO_EX(arginfo_class_UConverter_reasonText, 0, 1, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, reason, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_INFO_EX(arginfo_class_UConverter_setDestinationEncoding, 0, 1, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, encoding, IS_STRING, 0)
ZEND_END_ARG_INFO()

#define arginfo_class_UConverter_setSourceEncoding arginfo_class_UConverter_setDestinationEncoding

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_INFO_EX(arginfo_class_UConverter_setSubstChars, 0, 1, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, chars, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_MASK_EX(arginfo_class_UConverter_toUCallback, 0, 4, MAY_BE_STRING|MAY_BE_LONG|MAY_BE_ARRAY|MAY_BE_NULL)
	ZEND_ARG_TYPE_INFO(0, reason, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, source, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, codeUnits, IS_STRING, 0)
	ZEND_ARG_INFO(1, error)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_TENTATIVE_RETURN_TYPE_MASK_EX(arginfo_class_UConverter_transcode, 0, 3, MAY_BE_STRING|MAY_BE_FALSE)
	ZEND_ARG_TYPE_INFO(0, str, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, toEncoding, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, fromEncoding, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, options, IS_ARRAY, 1, "null")
ZEND_END_ARG_INFO()


ZEND_METHOD(UConverter, __construct);
ZEND_METHOD(UConverter, convert);
ZEND_METHOD(UConverter, fromUCallback);
ZEND_METHOD(UConverter, getAliases);
ZEND_METHOD(UConverter, getAvailable);
ZEND_METHOD(UConverter, getDestinationEncoding);
ZEND_METHOD(UConverter, getDestinationType);
ZEND_METHOD(UConverter, getErrorCode);
ZEND_METHOD(UConverter, getErrorMessage);
ZEND_METHOD(UConverter, getSourceEncoding);
ZEND_METHOD(UConverter, getSourceType);
ZEND_METHOD(UConverter, getStandards);
ZEND_METHOD(UConverter, getSubstChars);
ZEND_METHOD(UConverter, reasonText);
ZEND_METHOD(UConverter, setDestinationEncoding);
ZEND_METHOD(UConverter, setSourceEncoding);
ZEND_METHOD(UConverter, setSubstChars);
ZEND_METHOD(UConverter, toUCallback);
ZEND_METHOD(UConverter, transcode);


static const zend_function_entry class_UConverter_methods[] = {
	ZEND_ME(UConverter, __construct, arginfo_class_UConverter___construct, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, convert, arginfo_class_UConverter_convert, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, fromUCallback, arginfo_class_UConverter_fromUCallback, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, getAliases, arginfo_class_UConverter_getAliases, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	ZEND_ME(UConverter, getAvailable, arginfo_class_UConverter_getAvailable, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	ZEND_ME(UConverter, getDestinationEncoding, arginfo_class_UConverter_getDestinationEncoding, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, getDestinationType, arginfo_class_UConverter_getDestinationType, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, getErrorCode, arginfo_class_UConverter_getErrorCode, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, getErrorMessage, arginfo_class_UConverter_getErrorMessage, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, getSourceEncoding, arginfo_class_UConverter_getSourceEncoding, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, getSourceType, arginfo_class_UConverter_getSourceType, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, getStandards, arginfo_class_UConverter_getStandards, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	ZEND_ME(UConverter, getSubstChars, arginfo_class_UConverter_getSubstChars, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, reasonText, arginfo_class_UConverter_reasonText, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	ZEND_ME(UConverter, setDestinationEncoding, arginfo_class_UConverter_setDestinationEncoding, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, setSourceEncoding, arginfo_class_UConverter_setSourceEncoding, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, setSubstChars, arginfo_class_UConverter_setSubstChars, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, toUCallback, arginfo_class_UConverter_toUCallback, ZEND_ACC_PUBLIC)
	ZEND_ME(UConverter, transcode, arginfo_class_UConverter_transcode, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	ZEND_FE_END
};

static zend_class_entry *register_class_UConverter(void)
{
	zend_class_entry ce, *class_entry;

	INIT_CLASS_ENTRY(ce, "UConverter", class_UConverter_methods);
	class_entry = zend_register_internal_class_ex(&ce, NULL);

	return class_entry;
}
