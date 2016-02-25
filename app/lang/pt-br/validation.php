<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "O :attribute deve ser aceito.",
	"active_url"           => "A :attribute não é uma URL válida.",
	"after"                => "A :attribute deve ser depois de :date.",
	"alpha"                => "O :attribute só pode conter letras.",
	"alpha_dash"           => "O :attribute só pode conter letras, números e traços.",
	"alpha_num"            => "O :attribute só pode conter letras e números.",
	"array"                => "O :attribute deve ser um array.",
	"before"               => "A :attribute deve ser antes de :date.",
	"between"              => array(
		"numeric" => "O :attribute deve estar entre :min e :max.",
		"file"    => "O :attribute deve estar entre :min e :max kb.",
		"string"  => "O :attribute deve estar entre :min e :max caracteres.",
		"array"   => "O :attribute deve estar entre :min e :max ítens.",
	),
	"confirmed"            => "O :attribute não corresponde a combinação.",
	"date"                 => "A :attribute não é uma data válida.",
	"date_format"          => "O :attribute não corresponde ao formato :format.",
	"different"            => "O :attribute e :other devem ser diferentes.",
	"digits"               => "O :attribute deve conter :digits digitos.",
	"digits_between"       => "O :attribute deve ter entre :min e :max digitos.",
	"email"                => "O :attribute não é um email válido.",
	"exists"               => "A seleção :attribute é inválida.",
	"image"                => "O :attribute deve ser uma imagem.",
	"in"                   => "A seleção :attribute é invlaída.",
	"integer"              => "O :attribute deve ser do tipo inteiro.",
	"ip"                   => "O :attribute deve ter um endereço de IP válido.",
	"max"                  => array(
		"numeric" => "O :attribute não pode ser maior do que :max.",
		"file"    => "O :attribute não pode ser maior do que :max kb.",
		"string"  => "O :attribute não deve ser maior do que :max caracteres.",
		"array"   => "O :attribute não deve conter mais do que :max ítens.",
	),
	"mimes"                => "O :attribute deve ser do tipo: :values.",
	"min"                  => array(
		"numeric" => "O :attribute deve ter o tamamho minimo de :min.",
		"file"    => "O :attributedeve ter o tamamho minimo :min kb.",
		"string"  => "O :attribute deve ter o tamamho minimo :min caracteres.",
		"array"   => "O :attribute must have at least :min items.",
	),
	"not_in"               => "A seleção :attribute é inválida.",
	"numeric"              => "O :attribute deve ser um número.",
	"regex"                => "O :attribute formato é inválido.",
	"required"             => "O :attribute campo é obrigatório.",
	"required_if"          => "O :attribute campo é obrigatório quando :other é :value.",
	"required_with"        => "O :attribute campo é obrigatório quando :values is present.",
	"required_with_all"    => "O :attribute campo é obrigatório quando :values is present.",
	"required_without"     => "O :attribute campo é obrigatório quando :values is not present.",
	"required_without_all" => "O :attribute campo é obrigatório quando nenhum dos :values estão presentes.",
	"same"                 => "O :attribute e :other devem ser iguais.",
	"size"                 => array(
		"numeric" => "O :attribute deve ter o tamanho :size.",
		"file"    => "O :attribute deve ter o tamanho de :size kb.",
		"string"  => "O :attribute deve ter o tamanho de :size caracteres.",
		"array"   => "O :attribute deve conter :size ítens.",
	),
	"unique"               => "The :attribute has already been taken.",
	"url"                  => "The :attribute format is invalid.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
