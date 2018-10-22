<?php
function getItems($com_id)
{
	$CI = get_instance();
	$CI->load->model('Main_model');
	return $CI->Main_model->getItem($com_id);
}
function getItemsPurchase($com_id)
{
	$CI = get_instance();
	$CI->load->model('Main_model');
	return $CI->Main_model->getItemsPurchase($com_id);
}
function getPartyDebit($party_id)
{
	$CI = get_instance();
	$CI->load->model('Main_model');
	return $CI->Main_model->getPartyDebit($party_id);
}
function getRegionWiseParty($region)
{
	$CI= get_instance();
	$CI->load->model('Main_model');
	return $CI->Main_model->getParty($region);
}


?>