# IntegracionContinua

# create a network for containers to communicate
$ docker network create tienda
# launch mysql 5.7 container
$ docker run -ti --name 127.0.0.1 --network tienda -e MYSQL_ROOT_PASSWORD=admin -p 3307:3306 -d mysql:5.7
# launch prestashop container
$ docker run -ti --name distribuidora --network tienda -e DB_SERVER=127.0.0.1 -p 8080:80 -d prestashop/prestashop PS_DEMO_MODE=true
