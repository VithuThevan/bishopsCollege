<?php

namespace App\Helpers;

class CyberSourceHelper
{
    // Access HMAC_SHA256 and SECRET_KEY from the .env file
    const HMAC_SHA256 = 'HMAC_SHA256';
    const SECRET_KEY = 'SECRET_KEY';

    public static function sign($params)
    {
        $buildDataToSign = self::buildDataToSign($params);
        $hmacSha256 = config('app.HMAC_SHA256');
        $secretKey = config('app.SECRET_KEY');
        $baseEncode = base64_encode(hash_hmac($hmacSha256, $buildDataToSign, $secretKey, true));
        return $baseEncode;
    }

    private static function buildDataToSign($params)
    {
        $signedFieldNames = explode(",", $params['data']['signed_field_names']);
        $dataToSign = [];
        foreach ($signedFieldNames as $field) {
            $dataToSign[] = $field . "=" . $params['data'][$field];
        }
        return implode(",", $dataToSign);
    }
}

