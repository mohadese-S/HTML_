<?php
include_once __DIR__ . '/defaults.php';

function getConnection ($be_secure = false) {
    try {
        if ($be_secure) {
            return new SoapClient(constant("secure_wsdlUrl"),
                ['stream_context' => stream_context_create(['ssl' => ['allow_self_signed' => true, 'verify_peer' => false, 'verify_peer_name' => false]])]);
        } else {
            return new SoapClient(constant("insecure_wsdlUrl"), array('soap_version' => SOAP_1_1));
        }
    } catch (SoapFault $e) {
        return $e->getMessage();
    }
}

function getSolarDate ($saat) {
    return getConnection(true)->__soapCall("getDate", array(array("saat" => $saat)))->getDate;
}

function getTimeAsJson () {
    return getConnection(true)->__soapCall("getTimeAsJson", array())->getTimeAsJson;
}

function getVersion () {
    return explode("-", getConnection()->__soapCall("getVersion", array())->getVersion);
}

function getInfo() {
    return getConnection(true)->__soapCall("getInfo", array(array("language" => "en"))) -> getInfo;
}
function getPage(){
    return substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER["SCRIPT_NAME"],"/")+ 1);
}
function getTimeAsObject ()
{
    return getConnection(true)->__soapCall("getTimeAsObject", array())->getTimeAsObject;
}

