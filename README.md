# Combine Excel
PHP application to combine multiple Excel files into one

## Content
 - combine.php : a PHP script that reads an IMAP mailbox and combine all XLS(x) and send them back combined.
 - service : a BASH script that executes combine.php in a loop.
 - init : a SHELL script to be placed in /etc/init.d/ to launch the service script in the background.
 - settings.json : A JSON file that can be created to insert all scripts settings

## combine.php
### Requirements
 - Linux
 - Apache2
 - php
 - php-common
 - php-imap
 - php-imagick
 - ghostscript
### Execute
```BASH
php combine.php
```

## service
### Execute
```BASH
./service
```

## init
### Configure service
```BASH
sudo ln -s /opt/combine-excel/init /etc/init.d/combine-excel
sudo systemctl daemon-reload
sudo systemctl enable combine-excel
sudo systemctl start combine-excel
```

## settings.json
### Example
```JSON
{
    "smtp":{
        "host": "smtp.domain.com",
        "port": "465",
        "encryption": "SSL",
        "username": "username@domain.com",
        "password": "password"
    },
    "imap":{
        "host": "imap.domain.com",
        "port": "993",
        "encryption": "SSL",
        "isSelfSigned": true,
        "username": "username@domain.com",
        "password": "password"
    },
    "send":{
        "name": "Processing",
        "from": "username@domain.com"
    }
}

```
