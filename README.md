# hetzner-php
PHP Hetzner integration API\n\n

How to use?\n\n

Change hetzner token in config file (config.php)\n
Change token in config file (config.php)\n\n

Server creation:\n
Token = your token from config file (default: 123)\n
Name = hetzner server name\n
Image = OS image (https://docs.hetzner.cloud/#images)\n
server_type = hetzner vps plans (https://docs.hetzner.cloud/#pricing)\n
datacenter = datacenter (https://docs.hetzner.cloud/#datacenters-get-all-datacenters)\n
URL (example): yourlink.com/api.php?createServer&token=123&name=servername&image=ubuntu-22.04&server_type=cx11&datacenter=nbg1-dc3\n\n

Get all servers:\n
Token = your token from config file (default: 123)\n
URL (example): yourlink.com/api.php?getServers&token=123\n\n

Server deletion:\n
Token = your token from config file (default: 123)\n
id = id of the server to be deleted\n
URL (example): yourlink.com/api.php?deleteServer&token=123&id=4342314\n
