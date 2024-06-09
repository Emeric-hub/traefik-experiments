# a Simple Traefik demo

Juste launch bash start.sh

# What's inside

it creates a traffik proxy

and start tow separate projects

each one is routed based on his project name.

https://instance1.docker.localhost/

https://instance1.docker.localhost/pgadmin  

http://instance2.docker.localhost/

https://instance6.docker.localhost/ -> instance1

Dashboard is available here :

https://127.0.0.1:8080/dashboard#/http/services

/!\ No auth and restriction on ips /!\

## TODO :

- TLS ( selfsigned / let's encrypt / persistence )

- Coraza (plugins available !!! )
https://traefik.io/blog/traefik-3-deep-dive-into-wasm-support-with-coraza-waf-plugin/
- Crodwsec (plugins available !!! )

# Nice sources

https://github.com/56kcloud/traefik-training/

https://www.benjaminrancourt.ca/a-complete-traefik-configuration/

# Testing http3 :

docker run -it --rm ymuski/curl-http3 curl -vs -D/dev/stdout -o/dev/null --http3 https://172.28.84.58 -k -H "Host: instance3.docker.localhost"

where 172.28.84.58 is my eth0 ip address (WSL) and instance3.docker.locahost
