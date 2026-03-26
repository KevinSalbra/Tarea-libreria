# Imagen base
FROM php:8.2-cli

# Directorio de trabajo
WORKDIR /app

# Copiar archivos
COPY . .

# Instalar dependencias (si usas composer)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install

# Render usa un puerto dinámico
ENV PORT=10000

# Exponer puerto
EXPOSE 10000

# Comando usando el puerto de Render
CMD php -S 0.0.0.0:$PORT -t public