<?php
/**
 * Fonctions utiles au plugin Patrimoine
 *
 * @plugin     Patrimoine
 * @copyright  2016
 * @author     damien
 * @licence    GNU/GPL
 * @package    SPIP\Patrimoine\Fonctions
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Generer l'url d'un document dans l'espace public,
 * fonction du statut du document
 *
 * @param int $id
 * @param string $args
 * @param string $ancre
 * @param string $public
 * @param string $connect
 * @return string
 *
 * https://code.spip.net/@generer_url_ecrire_document
 */
 /*
function urls_generer_url_imagedoc($id, $args = '', $ancre = '', $public = null, $connect = '') {
	include_spip('inc/documents');
	return generer_url_imagedoc($id_document, $args, $ancre);
	//return generer_url_public("document","id_document=$id");
}


// https://code.spip.net/@generer_url_document_dist
function generer_url_imagedoc($id_document, $args = '', $ancre = '') {
	include_spip('inc/autoriser');
	if (!autoriser('voir', 'document', $id_document)) {
		return '';
	}

	$r = sql_fetsel('fichier,distant', 'spip_documents', 'id_document=' . intval($id_document));

	if (!$r) {
		return '';
	}

	$f = $r['fichier'];

	if ($r['distant'] == 'oui') {
		return $f;
	}

	// Si droit de voir tous les docs, pas seulement celui-ci
	// il est inutilement couteux de rajouter une protection
	$r = (autoriser('voir', 'document'));
	if (($r and $r !== 'htaccess')) {
		return get_spip_doc($f);
	}

	include_spip('inc/securiser_action');

	// cette action doit etre publique !
	return generer_url_action(
		'acceder_document',
		$args . ($args ? '&' : '')
			. 'arg=' . $id_document
			. ($ancre ? "&ancre=$ancre" : '')
			. '&cle=' . calculer_cle_action($id_document . ',' . $f)
			. '&file=' . rawurlencode($f),
		true,
		true
	);
}
*/
function balise_COMPTER_OBJET($p){
	$var1 = interprete_argument_balise(1,$p);
	$var2 = interprete_argument_balise(2,$p);
	$var3 = interprete_argument_balise(3,$p);
	$p->code = "calculer_balise_COMPTER_OBJET($var1,$var2,$var3)";
	$p->interdire_scripts = false;
	return $p;
}

function calculer_balise_COMPTER_OBJET($id_mot,$objet,$texte) {
	$res = sql_select(
		'*',
		array(
			'spip_mots_liens AS sml'),
		array(
			'sml.id_mot = '.$id_mot,
			'sml.objet = "'.$objet.'"')
	);
	$count=sql_count($res);
	return $count;
}
