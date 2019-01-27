#!/bin/bash

docker stop nginx;
docker run -it --rm --name certbot \
  -p 80:80 \
  -v "$(pwd)/data:/etc/letsencrypt" \
  -v "$(pwd)/datalib:/var/lib/letsencrypt" \
  certbot/certbot $1
  # certbot/certbot certonly

docker start nginx;

#docker run -it --rm --name certbot \
#  -p 80:80 \
#  -v "$(pwd)/data:/etc/letsencrypt" \
#  -v "$(pwd)/datalib:/var/lib/letsencrypt" \
#  certbot/certbot certonly \
#  --standalone \
#  --email admin@kelu.org --agree-tos \
#  -d test.kelu.org
#
#docker run -it --rm --name certbot \
#  -p 80:80 \
#  -v "$(pwd)/data:/etc/letsencrypt" \
#  -v "$(pwd)/datalib:/var/lib/letsencrypt" \
#  certbot/certbot renew
#
#docker run -it --rm --name certbot \
#  -v "$(pwd)/data:/etc/letsencrypt" \
#  -v "$(pwd)/datalib:/var/lib/letsencrypt" \
#  certbot/certbot certonly
