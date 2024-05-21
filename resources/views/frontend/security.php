<?php

define ('HMAC_SHA256', 'sha256');
define ('SECRET_KEY', 'f8314108254f49a3adf9d3b4e6c57b1b1b26674b70734f12b9cd880102ad4264db72495a25bc445ebfb77b7145416e25eff695024f094dab930bd9746482d6afc2a28d6f664b4561aa5602554b969eedcaa1ef5d3b484c3aaf9ef8082463b50060e913f4d37843b78b12660ecfaaaf9610b2b7a582e6446c8f91ef17dbff0495');

function sign ($params) {
  return signData(buildDataToSign($params), SECRET_KEY);
}

function signData($data, $secretKey) {
    return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
}

function buildDataToSign($params) {
        $signedFieldNames = explode(",",$params["signed_field_names"]);
        foreach ($signedFieldNames as $field) {
           $dataToSign[] = $field . "=" . $params[$field];
        }
        return commaSeparate($dataToSign);
}

function commaSeparate ($dataToSign) {
    return implode(",",$dataToSign);
}

?>
