@echo off
docker run -it --rm -v d:/GitHub/kelu.org/laravel-shop:/app composer:1.4.2 install --ignore-platform-reqs
