<?php 
#################################################################
#                                                               #
#                     DEVELOPED BY MYIDEAS                      #
#                        EASYPAY MB API                         #
#                                                               #
#################################################################
#Todas as informações devem coincidir com os detalhes da easypay#
#################################################################


$montante = $_SESSION['montante']; // Montante a pagar
$entity = "10111"; // Entidade 
$code = "adf48d1cd2946319216477895358e3a6";

$jsonurl = "http://test.easypay.pt/_s/api_easypay_01BG.php?ep_cin=23&ep_user=MYOWNI280618&ep_entity=10111&ep_ref_type=auto&ep_country=PT&ep_language=PT&t_value=".$montante."&s_code=adf48d1cd2946319216477895358e3a6";
$json = file_get_contents($jsonurl);

$query_str = parse_url($json, PHP_URL_QUERY);
parse_str($query_str, $query_params);

// Dados Gerados
$referencia_gerada = $query_params['amp;r']; // Referencia

##################################################################

