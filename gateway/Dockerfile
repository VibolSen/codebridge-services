FROM nginx:alpine

COPY ./gateway/nginx.conf /etc/nginx/nginx.conf
COPY ./gateway/docs.html /usr/share/nginx/html/docs.html

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
