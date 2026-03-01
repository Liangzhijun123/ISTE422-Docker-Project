# -------- Stage 1: Builder --------
FROM php:8.2-apache AS builder

WORKDIR /var/www/html

COPY src/ .

# Optional: enable apache rewrite
RUN a2enmod rewrite

# -------- Stage 2: Production --------
FROM php:8.2-apache

WORKDIR /var/www/html

COPY --from=builder /var/www/html /var/www/html

EXPOSE 80