@echo off
docker run -it --rm -v d:/GitHub/kelu.org/laravel-shop:/app composer:1.4.2 install --ignore-platform-reqs
::docker run -it --rm -v d:/GitHub/kelu.org/laravel-shop:/app composer:1.4.2 require encore/laravel-admin "1.6.8" --ignore-platform-reqs
::docker run -it --rm -v d:/GitHub/kelu.org/laravel-shop:/app composer:1.4.2 require overtrue/laravel-lang --ignore-platform-reqs
::docker run -it --rm -v d:/GitHub/kelu.org/laravel-shop:/app composer:1.4.2 install --ignore-platform-reqs
