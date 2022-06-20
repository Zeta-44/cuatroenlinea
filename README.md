
# Cuatro en linea
Esta es la guía para la instalación y el correcto funcionamiento del programa cuatro en linea hecho en PHP para la materia Adaptación del Ambiente de Trabajo.

------------

### - Instalación
Primero es necesario tener instalados estos 3 programas:
- Git [Link aquí](https://git-scm.com/download/win)
- Docker [Link aquí](https://docs.docker.com/desktop/)
- DDEV [Link aquí](https://ddev.com/get-started/)



Luego es necesario descargar todos los archivos que se encuentran es este repositorio. Para esto es necesario crear una carpeta donde vayamos a descargarlos y luego desde la consola movernos hasta dicha carpeta y ejecutar el siguiente comando:

```
git clone https://github.com/Zeta-44/cuatroenlinea
```
Una vez esté todo instalado, dentro de ese directorio hay que ejecutar el comando ```ddev config``` en el cual nos aparecerá una pantalla como esta:

<img src=https://cdn.discordapp.com/attachments/699989008280715285/988535649244160050/imagen.png width="800">

- El primer campo hace referencia al nombre del proyecto, si se deja den blanco se le asigna el nombre del directorio
- El segundo campo tiene que ser dejado en blanco para que se guarde en el directorio actual
- En el tercer campo se debe escribir laravel para aclarar el tipo de proyecto

Luego  es necesario instalar composer usando el comando ``ddev composer install`` 

Por último crearemos un archivo de ambiente ``cp .env.example .env`` y ``ddev php artisan key:config``  para crear una llave de autenticación.

------------
### Iniciar el proyecto

Utilizando ``ddev start`` y luego ``ddev launch`` se iniciará nuestro proyecto cuatro en linea y se lanzará la pagina en donde podremos verlo, si agregamos /jugar/1 al final del link podremos visualizar la pantalla de juego con una ficha en la primera columna.
El proyecto estaría listo para jugar y se vería de la siguiente manera:

<img src="https://cdn.discordapp.com/attachments/699989008280715285/988545363394838558/unknown.png">

Por último, una vez hayamos finalizado y querramos cerrar el proyecto es necesario escribir ``ddev poweroff`` para terminar el proceso correctamente. Si queremos volver a ejecutar el programa solo es necesario repetir los pasos de la sección **Iniciar el proyecto**.