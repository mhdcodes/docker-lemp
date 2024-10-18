# DOCKER LEMP

- Nginx
- PHP8.3-fpm
- MySQL
- Redis
- Mkcert (Local SSL)

## 🚀 Quickstart

- Install and launch Docker  
  
```bash
git clone git@github.com:the-dijkstra/docker-lemp.git
cd docker_lemp
docker-compose up
```

## 🔒 Setup SSL

```bash
mkcert -cert-file .docker/certs/server.crt -key-file .docker/certs/server.key example.localhost
```

| Service | Path                        |
| ------- | --------------------------- |
| Website | `https://example.localhost` |

## ⛺ Using a virtual host

- On your machine, run `$ sudo nano /etc/hosts` and add `127.0.0.1  example.localhost`
- Change the server name in `.docker/nginx/conf.d/default` to `example.localhost`
- Run `docker-compose up` again
