 
 run `docker-compose up`
 
 #run `docker-compose push`


 docker pull php
 docker run -d --name php --net askisi2-net -p 5000:80  -p 5001:80 php

 docker build -t fatnikos/unipicourses

 docker run --net askisi2-net -p 5000:5000 -p 5001:80 fatnikos/unipicourses





docker build -t fatnikos/unipicourses .
docker network create askisi2-net

docker run -d --name es --net askisi2-net -p 5000:80 php:apache

docker run -d --net askisi2-net -p 5001:80 --name unipicourses fatnikos/unipicourses