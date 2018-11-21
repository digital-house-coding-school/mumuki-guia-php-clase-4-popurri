Vamos con una ayuda!

``` php
public function up()
{
    Schema::create('NOMBRE_TABLA', function (Blueprint $table) {
        $table->string('name');
        
        // Faltarían el id y los timestamps
    });
}
```
