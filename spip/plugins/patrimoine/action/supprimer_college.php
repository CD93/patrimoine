<?php
/**
 * Utilisation de l'action supprimer pour l'objet college
 *
 * @plugin     Patrimoine
 * @copyright  2016
 * @author     damien
 * @licence    GNU/GPL
 * @package    SPIP\Patrimoine\Action
 */

if (!defined('_ECRIRE_INC_VERSION')) return;



/**
 * Action pour supprimer un·e college
 *
 * Vérifier l'autorisation avant d'appeler l'action.
 *
 * @param null|int $arg
 *     Identifiant à supprimer.
 *     En absence de id utilise l'argument de l'action sécurisée.
**/
function action_supprimer_college_dist($arg=null) {
	if (is_null($arg)){
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
	}
	$arg = intval($arg);

	// cas suppression
	if ($arg) {
		sql_delete('spip_colleges',  'id_college=' . sql_quote($arg));
	}
	else {
		spip_log("action_supprimer_college_dist $arg pas compris");
	}
}