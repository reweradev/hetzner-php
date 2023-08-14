<?php
include("config.php");
$act = $_GET['act'];
$token = $_GET['token'];

if($token === $vToken) {
    if($act === "createServer") {
        $image = $_GET['image'];
        $name = $_GET['name'];
        $server_type = $_GET['server_type'];
        $datacenter = $_GET['datacenter'];
        if (!empty($image . $name . $server_type . $datacenter)) {
        $curl = curl_init($serversUrl);
        curl_setopt($curl, CURLOPT_URL, $serversUrl);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer $hetznerToken",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{

  "automount": false,

  "datacenter": "$datacenter",
  
  "image": "$image",

  "labels": {},

  "name": "$name",

  "public_net": {

    "enable_ipv4": true,

    "enable_ipv6": true

  },

  "server_type": "$server_type",

  "start_after_create": true
  
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);
$info = curl_getinfo($curl);
curl_close($curl);
var_dump($resp);
        }
    }
 }

if($token === $vToken) {
if ($act === "getServers") {
        $curl = curl_init($serversUrl);
        curl_setopt($curl, CURLOPT_URL, $serversUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer $hetznerToken",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);
    }
}

if($token === $vToken) {
if ($act === "deleteServer") {
        $id = $_GET['id'];
        if(!empty($id)) {
        $curl = curl_init($serversUrl . "/" . $id);
        curl_setopt($curl, CURLOPT_URL, $serversUrl . "/" . $id);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer $hetznerToken",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);
        }
    }
}
