#!/bin/bash

cdir="$(cd "$(dirname "$0")" && pwd)"

docker run -it --rm \
  -v ${cdir}:/app \
  composer:1.4.2 install --ignore-platform-reqs

docker stop laravel-queue
docker start laravel-queue

