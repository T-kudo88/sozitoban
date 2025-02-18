FROM php:8.2-fpm

# 必要なパッケージをインストール
RUN apt-get update && apt-get install -y \
    zip unzip git curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Composer をインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# wait-for-it スクリプトをプロジェクトに追加
COPY wait-for-it.sh /wait-for-it.sh
RUN chmod +x /wait-for-it.sh

# 作業ディレクトリを設定
WORKDIR /var/www
