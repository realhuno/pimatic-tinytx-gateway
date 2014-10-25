pimatic-tinytx-gateway
======================

This is a simpl gateway between the pimatic shell sensor addon and the tinytx

you need to install an rfm12b
http://wiki.openenergymonitor.org/index.php?title=RFM12Pi_V2

Also you need
apach2 with php5

Start the gateway with
sudo perl ./gateway.pl

Pimatic-shell-execute addon
======================

    {
      "id": "temperature12",
      "name": "living",
      "class": "ShellSensor",
      "attributeName": "temperature",
      "attributeType": "number",
      "attributeUnit": "°C",
      "command": "cat /var/www/12_value0.txt"
    },
