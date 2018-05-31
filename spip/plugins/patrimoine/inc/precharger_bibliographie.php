<?php
/**
 * Préchargement des formulaires d'édition de bibliographie
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
 * Retourne les valeurs à charger pour un formulaire d'édition d'un bibliographie
 *
 * Lors d'une création, certains champs peuvent être préremplis
 * (c'est le cas des traductions) 
 *
 * @param string|int $id_bibliographie
 *     Identifiant de bibliographie, ou "new" pour une création
 * @param int $id_rubrique
 *     Identifiant éventuel de la rubrique parente
 * @param int $lier_trad
 *     Identifiant éventuel de la traduction de référence
 * @return array
 *     Couples clés / valeurs des champs du formulaire à charger.
**/
function inc_precharger_bibliographie_dist($id_bibliographie, $id_rubrique=0, $lier_trad=0) {
	return precharger_objet('bibliographie', $id_bibliographie, $id_rubrique, $lier_trad, 'vedette');
}

/**
 * Récupère les valeurs d'une traduction de référence pour la création
 * d'un bibliographie (préremplissage du formulaire). 
 *
 * @note
 *     Fonction facultative si pas de changement dans les traitements
 * 
 * @param string|int $id_bibliographie
 *     Identifiant de bibliographie, ou "new" pour une création
 * @param int $id_rubrique
 *     Identifiant éventuel de la rubrique parente
 * @param int $lier_trad
 *     Identifiant éventuel de la traduction de référence
 * @return array
 *     Couples clés / valeurs des champs du formulaire à charger
**/
function inc_precharger_traduction_bibliographie_dist($id_bibliographie, $id_rubrique=0, $lier_trad=0) {
	return precharger_traduction_objet('bibliographie', $id_bibliographie, $id_rubrique, $lier_trad, 'vedette');
}