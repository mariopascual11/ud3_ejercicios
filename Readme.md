Ejercicio 4

¿Qué crees que hace el método create de la clase Schema? Crea las tablas
¿Qué crees que hace $table->string('email')->primary();? Crea columnas, que es tipo string , se llama email y es primary.
¿Cuantas tablas hay definidas? Indica el nombre de cada tabla?
9: Users, cache, cache_locks, failed_jobs, job_batches, jobs, migrations, password_reset_tokens, session.

Ejercicio 5

migrations
users
password_resets
personal_access_tokens

Ejercicio 8

1.Crear una nueva migración para agregar el campo:

Ejecuta el siguiente comando para crear una migración que agregue el campo apellido a la tabla alumnos:

php artisan make:migration add_apellido_to_alumnos_table --table=alumnos
Editar la migración generada:

Abre el archivo de migración que se generó en database/migrations/ y agrega el siguiente código en el método up() para agregar el campo apellido:

public function up()
{
    Schema::table('alumnos', function (Blueprint $table) {
        $table->string('apellido');
    });
}

2.En el método down(), agrega el siguiente código para eliminar el campo apellido si es necesario:
public function down()
{
    Schema::table('alumnos', function (Blueprint $table) {
        $table->dropColumn('apellido');
    });
}

3.Ejecutar la migración:

Después de haber creado la migración, ejecuta el comando para aplicar la migración y añadir el nuevo campo:

php artisan migrate