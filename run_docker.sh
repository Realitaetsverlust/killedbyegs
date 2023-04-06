#!/bin/bash

docker run -p 80:80 -p 3306:3306 -p 2222:22 -v /home/rv/Projects/private/killedbyegs:/var/www/html --name killedbyegs -d lamp
