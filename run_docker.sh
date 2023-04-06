#!/bin/bash

docker run -p 80:80 -v $(pwd):/var/www/html --name killedbyegs -d lamp
