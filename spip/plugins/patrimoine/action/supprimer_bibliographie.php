<?php
/**
 * Utilisation de l'action supprimer pour l'objet bibliographie
 *
 * @plugin     Patrimoine
 * @copyright  2016
 * @author     damien
 * @licence    GNU/GPL
 * @package    SPIP\Patrimoine\Action
 */

if (!defined('_ECRIRE_INC_VERSION')) return;



/**
 * Action pour supprimer un·e bibliographie
 *
 * Vérifier l'autorisation avant d'appeler l'action.
 *
 * @param null|int $arg
 *     Identifiant à supprimer.
 *     En absence de id utilise l'argument de l'action sécurisée.
**/
function action_supprimer_bibliographie_dist($arg=null) {
	if (is_null($arg)){
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
	}
	$arg = intval($arg);

	// cas suppression
	if ($arg) {
		sql_delete('spip_bibliographies',  'id_bibliographie=' . sql_quote($arg));
	}
	else {
		spip_log("action_supprimer_bibliographie_dist $arg pas compris");
	}
}