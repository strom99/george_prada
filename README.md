### Integrantes:

- Marti Baulenas Perez
- Laura Alison Choque Copajira
- Jordi Mejia

### Como correr el proyecto correctamente con XAMPP

- Modificar la variable de sesión `$_SESSION['RUTA_BASE]` dentro del archivo `index.php` acorde a la ruta donde se clone el proyecto de htdocs.

#### Ejemplo:

`htdocs/carpeta_proyecto` -> `http://localhost/carpeta_proyecto`

`$_SESSION['RUTA_BASE']` = `http://localhost/carpeta_proyecto`

### Configurar las variables necesarias para la aplicación

Editar el archivo `php.ini` del xampp.

En MAC: `/Applications/XAMPP/xamppfiles/etc/php.ini`
en Window `Buscarse la vida`

```php
[opciones george_prada]

ruta_base='http://localhost/george_prada'

db_host='localhost'
db_username='root'
db_pass=''
db_name='george_prada'
```
Meet the team that will work with you every day to make your goals come true.
