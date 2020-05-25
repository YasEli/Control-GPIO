#!/bin/bash
cd /etc/cron.d/
chmod -R 755 /etc/cron.d/17on
chmod -R 755 /etc/cron.d/22on
chmod -R 755 /etc/cron.d/27on
chmod -R 755 /etc/cron.d/17off
chmod -R 755 /etc/cron.d/22off
chmod -R 755 /etc/cron.d/27off
chmod -R 755 /etc/cron.d/tomarFoto
/etc/init.d/cron restart
