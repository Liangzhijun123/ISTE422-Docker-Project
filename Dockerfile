
FROM php:8.2-apache AS builder

WORKDIR /var/www/html

COPY src/ .

RUN a2enmod rewrite

FROM php:8.2-apache

WORKDIR /var/www/html

COPY --from=builder /var/www/html /var/www/html

EXPOSE 80