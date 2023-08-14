# hetzner-php
PHP Hetzner integration API

How to use?

Change hetzner token in config file (config.php)<br>
Change token in config file (config.php)<br>

Server creation:<br>
Token = your token from config file (default: 123)<br>
Name = hetzner server name<br>
Image = OS image (https://docs.hetzner.cloud/#images)<br>
server_type = hetzner vps plans (https://docs.hetzner.cloud/#pricing<br>
datacenter = datacenter (https://docs.hetzner.cloud/#datacenters-get-all-datacenters)<br>
URL (example): yourlink.com/api.php?createServer&token=123&name=servername&image=ubuntu-22.04&server_type=cx11&datacenter=nbg1-dc3<br>

Get all servers:<br>
Token = your token from config file (default: 123<br>
URL (example): yourlink.com/api.php?getServers&token=123<br>

Server deletion:<br>
Token = your token from config file (default: 123)<br>
id = id of the server to be deleted<br>
URL (example): yourlink.com/api.php?deleteServer&token=123&id=4342314<br>

Get all Datacenters:
Token = your token from config file (default: 123)<br>
URL (example): yourlink.com/api.php?getDatacenters&token=123<br>
