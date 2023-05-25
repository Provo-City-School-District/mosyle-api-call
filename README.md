# Moysle API Call For the Vault

pulls columns 'serial_number','date_checkin', 'installed_memory','cpu_model','osversion' from the listdevices endpoint.

proof of concept while mosyle system being evaulated. 



build container with ```docker build -t moysle_api .``` inside the directory

run with ```docker run --rm --name moysle_api  moysle_api ```

you'll need to provide a .env file with the following variables
```
MOSYLEU=
MOSYLEP=
MOSYLEAPI=
```