# a Simple Traefik demo

Juste launch bash start.sh

# What's inside

it creates a traffik proxy

sub project.

Actually :

Provide a dashboard, provide selfsigned tls and http to https redirect

use a custom container (nginx based) to provided error pages and default front page.



## Dashboard is available here :

https://127.0.0.1:8080/dashboard#/http/services
/!\ No auth and restriction on ips /!\

## Instance 1 :
https://instance1.docker.localhost/

https://instance1.docker.localhost/pgadmin 

a dynamic docker compose instance with an echo container and a pgadmin (for demo) based on container label description

## Instance 2 :

https://instance2.docker.localhost/

a simple echo container with Ip restriction based on container label description

## Instance 3 :

https://instance3.docker.localhost/

a simple caddy server fot http3 tests.

### Testing http3 :

docker run -it --rm ymuski/curl-http3 curl -vs -D/dev/stdout -o/dev/null --http3 https://172.28.84.58 -k -H "Host: instance3.docker.localhost"

where 172.28.84.58 is my eth0 ip address (WSL) and instance3.docker.locahost

(it seems not to work or activate ... need investigations)

## Instance 4 :

https://instance4.docker.localhost/

a reverse proxy configuration based on dynamic file loading. (pointing to google)

## Instance 5 :

https://instance4.docker.localhost/

a reverse proxy configuration based on dynamic file loading. (pointing to local instance 1)

## Instance 6 :

https://instance6.docker.localhost/ -> instance1

a reverse configuration based on a remote http (php server) that provide a remote configuration file.


## TODO :

- TLS ( selfsigned (OK) / let's encrypt / persistence )

- Coraza (plugins available !!! )
https://traefik.io/blog/traefik-3-deep-dive-into-wasm-support-with-coraza-waf-plugin/

- Crodwsec (plugins available !!! )

- TCP / UDP LB ?

# Nice sources

https://github.com/56kcloud/traefik-training/

https://www.benjaminrancourt.ca/a-complete-traefik-configuration/


