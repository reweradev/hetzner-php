# hetzner-php
PHP Hetzner integration API

How to use?

Change hetzner token in config file (config.php)
Change token in config file (config.php)

Server creation:
Token = your token from config file (default: 123)
Name = hetzner server name
Image = OS image (https://docs.hetzner.cloud/#images)
server_type = hetzner vps plans (https://docs.hetzner.cloud/#pricing)
datacenter = datacenter (https://docs.hetzner.cloud/#datacenters-get-all-datacenters)
URL (example): yourlink.com/api.php?createServer&token=123&name=servername&image=ubuntu-22.04&server_type=cx11&datacenter=nbg1-dc3

Get all servers:
Token = your token from config file (default: 123)
URL (example): yourlink.com/api.php?getServers&token=123

Server deletion:
Token = your token from config file (default: 123)
id = id of the server to be deleted
URL (example): yourlink.com/api.php?deleteServer&token=123&id=4342314
