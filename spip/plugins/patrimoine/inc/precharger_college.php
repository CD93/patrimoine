<?php
/**
 * Préchargement des formulaires d'édition de college
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
 * Retourne les valeurs à charger pour un formulaire d'édition d'un college
 *
 * Lors d'une création, certains champs peuvent être préremplis
 * (c'est le cas des traductions) 
 *
 * @param string|int $id_college
 *     Identifiant de college, ou "new" pour une création
 * @param int $id_rubrique
 *     Identifiant éventuel de la rubrique parente
 * @param int $lier_trad
 *     Identifiant éventuel de la traduction de référence
 * @return array
 *     Couples clés / valeurs des champs du formulaire à charger.
**/
function inc_precharger_college_dist($id_college, $id_rubrique=0, $lier_trad=0) {
	return precharger_objet('college', $id_college, $id_rubrique, $lier_trad, 'titre');
}

/**
 * Récupère les valeurs d'une traduction de référence pour la création
 * d'un college (préremplissage du formulaire). 
 *
 * @note
 *     Fonction facultative si pas de changement dans les traitements
 * 
 * @param string|int $id_college
 *     Identifiant de college, ou "new" pour une création
 * @param int $id_rubrique
 *     Identifiant éventuel de la rubrique parente
 * @param int $lier_trad
 *     Identifiant éventuel de la traduction de référence
 * @return array
 *     Couples clés / valeurs des champs du formulaire à charger
**/
function inc_precharger_traduction_college_dist($id_college, $id_rubrique=0, $lier_trad=0) {
	return precharger_traduction_objet('college', $id_college, $id_rubrique, $lier_trad, 'titre');
}