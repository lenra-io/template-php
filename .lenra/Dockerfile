# syntax=docker/dockerfile:1.4

# builder
FROM composer:latest as builder
WORKDIR /app
ADD --link . ./
RUN \
    composer

# of-watchdog
FROM ghcr.io/openfaas/of-watchdog:0.9.6 as of-watchdog

# runtime
FROM php:latest as runtime
ENV \
    LOG_LEVEL="debug"\
    upstream_url="http://127.0.0.1:3000"\
    mode="http"\
    fprocess="php -S 127.0.0.1:3000"\
    exec_timeout="0"
WORKDIR /app
COPY --link --chown=1000:1000 --from=builder "/app" "/app/"
COPY --link --chown=1000:1000 --from=of-watchdog "/fwatchdog" "/fwatchdog"
USER 1000
EXPOSE 8080
CMD ["/fwatchdog"]
