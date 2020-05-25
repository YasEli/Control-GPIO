#!/bin/bash
cd /home/pi/
fswebcam -d /dev/video0 -r 300x300 -s 30 -F 5 foto1.jpg
sleep 1

