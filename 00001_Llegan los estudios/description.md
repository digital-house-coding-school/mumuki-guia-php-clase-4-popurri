Si bien ya conocemos el sistema que maneja Actores, Géneros y Películas, los estudios de cine se pusieron celosos y quieren tener una tabla propia en la base de datos.

Dado esto te pedimos que completes el archivo de migración con las siguientes especificaciones:

> 1. El método `up` debe crear una tabla llamada **studio**. Para esto deberías utilizar el método `Schema::create` que recibirá 2 parámetros. El primer parámetro debe ser un string especificando el nombre de la tabla a crear. El segundo parámetro debe ser una función anónima que se especifica a continuación

> 2. La función anónima que recibe `Schema::create` recibe un parámetro de tipo `Blueprint` e internamente debe definir una columna **id** para la tabla mediante el método `increments` y una columna llamada **name** mediante el método `string`. Por último debe asignarse a la tabla las columnas **created_at** y **updated_at** mediante el método `timestamps`. 

> 3. El método `down` debe eliminar la tabla mediante el método `Schema::drop` que recibe como parámetro el nombre de la tabla a eliminar.

En la pista más abajo te dejamos un ejemplo incompleto de la solución en caso de que lo necesites