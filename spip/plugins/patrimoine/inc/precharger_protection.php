<?php
/**
 * Préchargement des formulaires d'édition de protection
 *
 * @plugin     Patrimoine
 * @copyright  2016
 * @author     damien
 * @licence    GNU/GPL
 * @package    SPIP\Patrimoine\Formulaires
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

include_spip('inc/precharger_objet');

/**
 * Retourne les valeurs à charger pour un formulaire d'édition d'un protection
 *
 * Lors d'une création, certains champs peuvent être préremplis
 * (c'est le cas des traductions) 
 *
 * @param string|int $id_protection
 *     Identifiant de protection, ou "new" pour une création
 * @param int $id_rubrique
 *     Identifiant éventuel de la rubrique parente
 * @param int $lier_trad
 *     Identifiant éventuel de la traduction de référence
 * @return array
 *     Couples clés / valeurs des champs du formulaire à charger.
**/
function inc_precharger_protection_dist($id_protection, $id_rubrique=0, $lier_trad=0) {
	return precharger_objet('protection', $id_protection, $id_rubrique, $lier_trad, 'nomusage');
}

/**
 * Récupère les valeurs d'une traduction de référence pour la création
 * d'un protection (préremplissage du formulaire). 
 *
 * @note
 *     Fonction facultative si pas de changement dans les traitements
 * 
 * @param string|int $id_protection
 *     Identifiant de protection, ou "new" pour une création
 * @param int $id_rubrique
 *     Identifiant éventuel de la rubrique parente
 * @param int $lier_trad
 *     Identifiant éventuel de la traduction de référence
 * @return array
 *     Couples clés / valeurs des champs du formulaire à charger
**/
function inc_precharger_traduction_protection_dist($id_protection, $id_rubrique=0, $lier_trad=0) {
	return precharger_traduction_objet('protection', $id_protection, $id_rubrique, $lier_trad, 'nomusage');
}