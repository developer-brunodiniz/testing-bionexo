FROM nginx:stable

ARG user=bionexo
ARG uid=1000

RUN rm -rf /var/cache/apk/* && \
    rm -rf /tmp/*

RUN rm /etc/nginx/conf.d/default.conf
COPY ./nginx.conf /etc/nginx/conf.d

EXPOSE 80