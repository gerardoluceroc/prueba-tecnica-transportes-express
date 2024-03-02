# Descripción del Repositorio

Este repositorio contiene los archivos necesarios para completar los ejercicios 1, 2 y 3 de la prueba técnica de Transportes Express.

# Enunciados

1. HTML, CSS, y JavaScript:

Crea una página web que tenga un formulario para ingresar información sobre un nuevo viaje (por ejemplo, origen, destino, fecha, hora).

Utiliza CSS para estilizar la página y garantizar una presentación atractiva y responsiva.

2. PHP y MySQL:

Desarrolla un script PHP que reciba datos del formulario HTML y los inserte en una base de datos MySQL.

Crea una página adicional (puede ser en PHP o utilizando algún framework) que muestre la lista de todos los viajes almacenados en la base de datos en una tabla.

3. Análisis y Extracción de Datos:

    1. Haz un informe en Google Sheets (o Excel) que muestre toda la información de la tabla tm_ticket, incluyendo el nombre de la categoría (cat_nom) al lado de cat_id. Incluye la consulta SQL dentro del informe.

    2. Haz un informe en Google Sheets (o Excel) que muestre la información de todos los tickets asociados a la empresa "Administración comercial derco" solo del mes de FEBRERO. Incluye la consulta SQL dentro del informe.

    3. Haz un informe en Google Sheets (o Excel) que muestre la información de todos los tickets asociados al usuario "Giovanni Corvalan". Incluye la consulta SQL dentro del informe.

    4. Haz un informe en Google Sheets (o Excel) que muestre la información de todos los tickets asociados a Sebastián Riquelme, sumando el tick_valor. Excluye de esta suma aquellos tickets que tengan prio_id igual a 1. Presenta esta información en el informe y resalta (pintando de verde) las filas correspondientes a los tickets excluidos. Incluye la consulta SQL dentro del informe.

    5. Agrega una sección adicional en el informe que presente dos totales:

    6. Total General (Excluyendo prio_id 1): Suma de todos los tick_valor de los tickets asociados a Sebastián Riquelme excluyendo aquellos con prio_id igual a 1. Incluye la consulta SQL dentro del informe.

    7. Total Ecommerce (Solo prio_id 1): Suma de todos los tick_valor de los tickets asociados a Sebastián Riquelme con prio_id igual a 1.Incluye la consulta SQL dentro del informe.

## Requisitos

- Docker
- Docker Compose

## Ejercicio 1 y 2

Para ver los resultados del ejercicio 1 y 2, sigue estos pasos:

1. Navega a la carpeta "Ejercicio-1-y-2" usando el comando:
   ```bash
   cd Ejercicio-1-y-2
   ```

2. Ejecuta el siguiente comando para correr los contenedores en primer plano:
   ```bash
   sudo docker-compose up
   ```

   O bien, ejecuta el siguiente comando para correr los contenedores en segundo plano:
   ```bash
   sudo docker-compose up -d
   ```

## Ejercicio 3

Para ver los resultados del ejercicio 3, sigue estos pasos:

1. Navega a la carpeta "Ejercicio-3" usando el comando:
   ```bash
   cd Ejercicio-3
   ```

2. Ejecuta el siguiente comando para levantar un contenedor de Docker con MySQL y ejecutar el script "pruebatecnica.sql":
   ```bash
   docker-compose up -d
   ```

Nota: Asegúrate de tener Docker y Docker Compose instalados en tu sistema antes de ejecutar los comandos anteriores.


