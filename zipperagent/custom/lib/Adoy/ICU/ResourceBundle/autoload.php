<?php
spl_autoload_register(function ($class) {
	require_once ZIPPERAGENTPATH. "/custom/lib/Adoy/ICU/ResourceBundle/ResourceBundle.php";
	require_once ZIPPERAGENTPATH. "/custom/lib/Adoy/ICU/ResourceBundle/Parser.php";
	require_once ZIPPERAGENTPATH. "/custom/lib/Adoy/ICU/ResourceBundle/Lexer.php";
	require_once ZIPPERAGENTPATH. "/custom/lib/Adoy/ICU/ResourceBundle/LexingException.php";
	require_once ZIPPERAGENTPATH. "/custom/lib/Adoy/ICU/ResourceBundle/ParsingException.php";
	require_once ZIPPERAGENTPATH. "/custom/lib/Adoy/ICU/ResourceBundle/ResourceAlias.php";
});