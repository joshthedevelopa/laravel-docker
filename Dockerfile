FROM docker.io/bitnami/laravel:8.6.11

COPY . .
# RUN php artisan migrate -y
EXPOSE 8000
CMD ["php", "artisan", "serve"]