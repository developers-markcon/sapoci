<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests')
;

$config = new PhpCsFixer\Config();
return $config
    ->setRules([
        '@PSR2' => true,
        '@PSR1' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'native_function_invocation' => [
			'include' => [\PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer::SET_INTERNAL],
			'scope' => 'namespaced',
			'strict' => false
		],
		'single_line_comment_spacing' => false,
        'void_return' => true,
        'random_api_migration' => true,
        'pow_to_exponentiation' => true,
        'combine_nested_dirname' => true,
        '@PHP73Migration' => true,
        'global_namespace_import' => [
            'import_classes' => false
        ]
    ])
    ->setIndent("\t")
    ->setFinder($finder)
;
