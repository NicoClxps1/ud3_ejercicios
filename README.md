1 ¿Qué crees que hace el método create de la clase Schema?

El método create de la clase Schema en Laravel se utiliza para crear una nueva tabla en la base de datos. Es uno de los métodos más comunes en las migraciones, ya que define la estructura de la tabla, como sus columnas, índices, claves, etc.

2 ¿Qué crees que hace $table->string('email')->primary();?

El código $table->string('email')->primary(); está definiendo una columna llamada email como clave primaria (primary key) de la tabla.

Explicación:

$table->string('email'): Define una columna llamada email de tipo string (cadena de texto).
->primary(): Hace que la columna email sea una clave primaria de la tabla.
Esto significa que los valores de la columna email deben ser únicos y no nulos. Además, Laravel usará automáticamente un índice único en esta columna, asegurando que no haya duplicados en los valores de email.

3¿Cuántas tablas hay definidas? Indica el nombre de cada tabla.

Para responder a esta pregunta, deberías revisar todos los archivos dentro de la carpeta database/migrations, ya que ahí es donde se definen las migraciones que crean las tablas.

Abre los archivos dentro de database/migrations/.
Dentro de cada archivo de migración, busca las llamadas al método Schema::create(). Cada llamada a este método define una tabla.
Ejercicio 4 (1p)
Revisa los ficheros de la carpeta database/migrations y contesta a las siguientes preguntas:

1. ¿Qué crees que hace el método create de la clase Schema?
El método create de la clase Schema en Laravel se utiliza para crear una nueva tabla en la base de datos. Este método recibe dos parámetros:
El nombre de la tabla (un string).
Una función de callback que se pasa como segundo parámetro, donde se definen las columnas y restricciones de la tabla utilizando el objeto $table.
2. ¿Qué crees que hace $table->string('email')->primary();?
Este código está definiendo una columna en una tabla de base de datos y la marca como la clave primaria de la tabla.
$table->string('email'): Define una columna llamada email que almacenará una cadena de texto (por lo general, un correo electrónico).
->primary(): Este método convierte la columna email en la clave primaria de la tabla. Al ser clave primaria, los valores en esta columna deben ser únicos y no nulos.
3. ¿Cuantas tablas hay definidas? Indica el nombre de cada tabla
8

Ejercicio 5 (1p)
¿Cuántas tablas aparecen?
9
Ejercicio 6 (1p)
Indica qué realiza los siguientes comandos:

- php artisan migrate:
Descripción: Este comando ejecuta las migraciones pendientes en la base de datos. Esto significa que Laravel buscará en la carpeta database/migrations todas las migraciones que aún no se han ejecutado y las aplicará a la base de dato
- php artisan migrate:status:
Descripción: Este comando muestra el estado de todas las migraciones, es decir, qué migraciones se han ejecutado y cuáles están pendientes. Te dará una lista de las migraciones con una columna Ran? que indica si cada migración se ha aplicado o no.
- php artisan migrate:rollback:
Descripción: Este comando revierte la última migración que se haya ejecutado. Si tienes migraciones que modifican la base de datos (como create o alter), este comando revertirá esos cambios.
- php artisan migrate:reset:
Descripción: Este comando revierte todas las migraciones que se han ejecutado. Es más agresivo que migrate:rollback, ya que deshace todas las migraciones aplicadas, no solo la última.
- php artisan migrate:refresh:
Descripción: Este comando revierte todas las migraciones y luego las vuelve a ejecutar. Es útil si quieres "reiniciar" el estado de las migraciones en tu base de datos. También puedes usar la opción --seed para volver a sembrar la base de datos después de ejecutar las migraciones.
- php artisan make:migration:
Descripción: Este comando genera un nuevo archivo de migración. Te permite crear un archivo de migración vacío que luego puedes editar para definir la estructura de una tabla, columnas, índices, etc.
- php artisan migrate --seed:
Descripción: Este comando ejecuta las migraciones y luego ejecuta los "seeders" (semillas) para poblar la base de datos con datos de ejemplo. Es útil cuando necesitas no solo crear las tablas, sino también poblarlas con datos iniciales.
Ejercicio 8 (1p)
¿Qué pasos debemos dar si queremos añadir el campo $table->string('apellido'); a la tabla alumnos del ejercicio anterior?
1. Crear una nueva migración
2. Editar la migración
3. Ejecutar la migración
4. Verificar los cambios en la base de datos
5. Revertir los cambios (opcional)

Ejercicio 9 (1p)
Muestra el contenido de la tabla alumnos y comprueba que se han creado correctamente.
MariaDB [test2]> SELECT * FROM alumnos;
+----+------------------+----------------------------+---------------------+---------------------+
| id | nombre           | email                      | created_at          | updated_at          |
+----+------------------+----------------------------+---------------------+---------------------+
|  1 | Juan Pérez       | juan.perez@example.com     | 2025-01-07 19:35:45 | 2025-01-07 19:35:45 |
|  2 | María González   | maria.gonzalez@example.com | 2025-01-07 19:35:45 | 2025-01-07 19:35:45 |
|  3 | Carlos López     | carlos.lopez@example.com   | 2025-01-07 19:35:45 | 2025-01-07 19:35:45 |
+----+------------------+----------------------------+---------------------+---------------------+