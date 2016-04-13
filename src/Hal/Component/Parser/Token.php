<?php
namespace Hal\Component\Parser;

interface Token
{

    const T_VALUE_STRING = 'value_string';
    const T_VALUE_FLOAT = 'value_float';
    const T_VALUE_INTEGER = 'value_integer';
    const T_VALUE_BOOLEAN = 'value_boolean';
    const T_VALUE_ARRAY = 'value_array';

    const T_CLASS = 'class';
    const T_INTERFACE = 'interface';
    const T_FUNCTION = 'function';
    const T_NEW = 'new';
    const T_ABSTRACT = 'abstract';
    const T_PAAMAYIM_NEKUDOTAYIM = '::';
    const T_EXTENDS = 'extends';
    const T_IMPLEMENTS = 'implements';
    const T_FUNCTION_RETURN = ':';
    const T_RETURN = 'return';

    const T_VISIBILITY_PUBLIC = 'public';
    const T_VISIBILITY_PRIVATE = 'private';
    const T_VISIBILITY_PROTECTED = 'protected';
    const T_STATIC = 'static';

    const T_BRACE_OPEN = '{';
    const T_BRACE_CLOSE = '}';
    const T_PARENTHESIS_OPEN = '(';
    const T_PARENTHESIS_CLOSE = ')';

    const T_ECHO = 'echo';

    const T_COMMENT_OPEN = '/*';
    const T_COMMENT_CLOSE = '*/';
    const T_COMMENT = '//';

    const T_USE = 'use';
    const T_AS = 'as';
    const T_NAMESPACE = 'namespace';

    const T_EQUAL = '=';

    const T_COMP_EQUALS = '==';
    const T_COMP_EQUALS_STRIC = '===';
    const T_COMP_GREATER_THAN = '>';
    const T_COMP_GREATER_OR_EQUALS_THAN = '>=';
    const T_COMP_LOWER_THAN = '<';
    const T_COMP_LOWER_OR_EQUALS_THAN = '<=';

}