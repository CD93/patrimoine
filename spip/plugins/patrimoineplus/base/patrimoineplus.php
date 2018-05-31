<?php
/**
 * Plugin Patrimoineplus
 * Licence GPL (c) Damien Simsen
 * 
 * Fichier de déclaration de la base de donnée
 * 
 * @package Patrimoineplus\Pipelines
 */


if (!defined("_ECRIRE_INC_VERSION")) return;

/**
 * Insertion dans le pipeline declarer_tables_interfaces (SPIP)
 * 
 * Déclaration des jointures spécifiques
 * 
 * @param array $interface
 * @return array $interface
 */
function patrimoineplus_declarer_tables_interfaces($interface){
	return $interface;
}
?>