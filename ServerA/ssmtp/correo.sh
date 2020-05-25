#!/bin/bash
uuencode /home/pi/foto1.jpg foto1.jpg > /tmp/out.mail
mail -s "Alerta intruso" proyectosoii2020@gmail.com < /tmp/out.mail
rm -f /tmp/out.mail
echo "Correo enviado"
