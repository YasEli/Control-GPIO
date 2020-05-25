#!/bin/bash
uuencode /home/pi/linux.png linux.png > /tmp/out.mail
mail -s "Gpio apagado" proyectosoii2020@gmail.com < /tmp/out.mail
rm -f /tmp/out.mail
echo "Correo enviado"

