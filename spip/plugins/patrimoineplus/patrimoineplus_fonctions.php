<?php
/**
 * Fonctions utiles au plugin Patrimoineplus
 *
 * @plugin     Patrimoineplus
 * @copyright  2016
 * @author     damien
 * @licence    GNU/GPL
 * @package    SPIP\Patrimoine\Fonctions
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

function balise_MAJDOC($p){
	$var1 = interprete_argument_balise(1,$p);
	$var2 = interprete_argument_balise(2,$p);
	$var3 = interprete_argument_balise(3,$p);
	$p->code = "calculer_balise_MAJDOC($var1,$var2,$var3)";
	$p->interdire_scripts = false;
	return $p;
}

function calculer_balise_MAJDOC($id_document,$largeur,$hauteur) {
	$res = sql_updateq(
		'spip_documents',
		array(
			'hauteur' => $hauteur,
			'largeur' => $largeur),
    'id_document='.$id_document
	) or Die("raté");
	return $res;
}
