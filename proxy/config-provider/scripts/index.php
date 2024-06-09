<?php
echo '
http:
  routers:
    instance6:
      rule: Host(`instance6.docker.localhost`)
      middlewares: instance6-redirect,instance6-error-handling
      service: instance1@docker

    instance6-ssl:
      rule: Host(`instance6.docker.localhost`)
      tls: true
      middlewares: instance6-redirect,instance6-error-handling
      service: instance1@docker

  middlewares:
    instance6-redirect:
      redirectScheme:
        scheme: https
        permanent: true

    instance6-error-handling:
      errors:
        status: 500,502,503,504
        service: default-nginx-proxy@docker
        query: /50x.html

  services:
    instance6:
      loadBalancer:
        servers:
          - url: "http://192.168.178.12:80"
        passHostHeader: true
        healthCheck:
          path: /healthcheck
          interval: 100ms
          timeout: 75ms
          scheme: http
';
?>
