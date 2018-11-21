Ahora que creamos la tabla estudio, vamos a relacionarla con la tabla de peliculas.

Es decir, la tabla **movies** debería tener una clave foránea hacia la tabla de **studios** para indicar esta relación de 1 a muchos.

En este caso ya te damos parte de la migración armada (**notese que se usa el método `Schema::table` para modificar una tabla**) y es tu trabajo completar las funciones anónimas con las siguientes especificaciones:

> **A.** La función `up` primero debería crear la columna que será la clave foránea. Para esto deberías utilizar el método de la clase `Blueprint` (es decir, la variable `$table`) llamado `unsignedInteger` que recibirá el nombre de la columna. En este caso, la llamaremos **studio_id**

> **B.** La función `up` también debe crear la relación entre las tablas utilizando el siguiente método:

``` php
$table->foreign('FK')->references('PK')->on('TABLA');
```

> donde FK debe indicar el nombre de la clave foránea (studio_id), PK el nombre de la clave primaria en la tabla a relacionar (id) y TABLA el nombre de la tabla a relacionar (studio)

> **C.** La función `down` debería eliminar la clave foránea y su columna. Laravel resuelve esto mediante un solo método de la clase `Blueprint` (es decir, la variable `$table`) llamado `dropForeign`. Este método recibe un string con la convención TABLA_COLUMNA_foreign. En este caso se debería enviar ****
