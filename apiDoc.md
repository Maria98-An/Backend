Introducción

En este proyecto se va a desarrollar la parte backend de mi proyecto individual 
"BON-APPETIT" el cual estará formado principalmente por páginas web. Se desea desarrollar una pagina web consistente y ademas actualmente internet constituye un medio de comunicación cada día más importante y utilizado por más personas. Como sabemos, Internet es un medio interactivo, que a diferencia de los medios tradicionales como radio o televisión, permite conocer las preferencias y tendencias de consumo del posible cliente y desplegar información personalizada de acuerdo a ellas. 

Y hablando a nivel comercial en internet se puede hacer una mejor publicidad:
La publicidad en internet ofrece muchas ventajas:
     - Permite medir de forma muy precisa y de forma continua el resultado
       de las campañas de publicidad.
     - Permite entrar directamente en contacto con los potenciales clientes
       o usuarios.
     - Permite continuas adaptaciones y modificaciones de las campañas
       según las exigencias del momento.
     - Es mucho más económico que los medios de comunicación
       "tradicionales"
     - Analizar el tipo de clientela que adquiere nuestro producto.




Tecnologías utilizadas
    PHP
    JSON
    REST

Modelado de la base de datos

En es te caso de se ha optado por MySql para el desarrollo de a base de datos. El servidor de bases de datos relacionales MySQL es muy rápido, fiable y fácil de usar a nivel mundial MySQL Server se desarrolló originalmente para manejar grandes bases de datos más rápido que las soluciones de gestores de bases de datos existentes y ha sido usado con éxito en entornos de producción de alto rendimiento durante varios años.
MySQL Server trabaja en entornos cliente/servidor o incrustados; el software de bases de datos MySQL es un sistema cliente/servidor que consiste en un servidor SQL que trabaja con diferentes programas y bibliotecas cliente, herramientas administrativas y diversas interfaces de programación para aplicaciones (APIs). También se proporciona el MySQL Server como biblioteca incrustada, que se puede incluir en una aplicación para obtener un producto más pequeño, rápido y fácil de
administrar. En este caso se va a usar PHP para trabajar con el servidor SQL.


Modelo relacional base de datos


Figura 1 - Modelo relacional base de datos

API

Usuarios 
Pedidos
Productos 
Menu 

Usuarios
GET	/?endpoint=usuario
Parámetros	Ninguno
Cuerpo
Ninguno

Respuestas
status: 200
[
    {
        id:1,
        nombre: "Pepito",
        ...
    }, ...
]
status: 400
{
    mensaje: "No se pudo obtener los datos"
}
GET	/?endpoint=usuario&id=:id
Parámetros	:id Identificador del usuario.
Cuerpo
Ninguno

Respuestas
status: 200
    {
        id:1,
        nombre: "Pepito",
        ...
    }
status: 400
{
    mensaje: "No se pudo obtener al usuario"
}
POST	/?endpoint=usuario
Parámetros	Ninguno
Cuerpo
{
  "nombre": "Pepito", //Requerido
  "apellido": "Perez", //Opcional
  "usuario": "usuario", //Requerido
  "contraseña": "123321" //Requerido
}
Respuestas
status: 200
    {
        id:1
    }
status: 400
{
    mensaje: "No se pudo registrar al usuario"
}
status: 401
{
    mensaje: "Faltan datos requeridos"
}
PUT	/?endpoint=usuario&id=:id
Parámetros	:id Identificador del usuario
Cuerpo
{
  "nombre": "Pepito", //Requerido
  "apellido": "Perez", //Opcional
  "usuario": "usuario", //Requerido
  "contraseña": "123321" //Requerido
}
Respuestas
status: 200
{
    mensaje:"Usuario actualizado"
}
status: 400
{
    mensaje: "No se pudo actualizar al usuario"
}
DELETE	/?endpoint=usuario&id=:id
Parámetros	:id Identificador del usuario
Cuerpo
Ninguno

Respuestas
status: 200
{
    mensaje:"Usuario eliminado"
}
status: 400
{
    mensaje: "No se pudo eliminar al usuario"
}
POST	/?endpoint=login
Parámetros	Ninguno
Cuerpo
{
  "usuario": "usuario", //Requerido
  "contraseña": "123321" //Requerido
}
Respuestas
status: 200
{
    token:"4asd2asd42sad8geguyi8SADsaoiupdklksad95sad"
}
status: 400
{
    mensaje: "Usuario y/o contraseña incorrectas"
}
status: 401
{
    mensaje: "Faltan datos requeridos"
}
Repositorio
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

https://github.com/Brb-code/hohovery/tree/backend

