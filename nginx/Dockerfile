FROM nginx:stable-bookworm

# Remove default nginx configuration
RUN rm /etc/nginx/conf.d/default.conf

# Copy custom nginx configuration
COPY nginx.conf /etc/nginx/conf.d/

WORKDIR /var/www

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"] 