# Calculadora

Este proyecto es una calculadora básica desarrollada con JavaScript, Bootstrap y PHP siguiendo el patrón Modelo Vista Controlador (MVC).

## Características principales

- Permite realizar operaciones matemáticas simples como suma, resta, multiplicación y división.
- Utiliza JavaScript para la interactividad del usuario en el navegador.
- Está diseñada con Bootstrap para una interfaz de usuario atractiva y responsiva.
- Utiliza PHP en el servidor para interactuar con una API externa que realiza los cálculos matemáticos.

## Requisitos

- Ambiente local de desarrollo como XAMPP instalado en tu computadora.
- Debes colocar el proyecto en la carpeta `htdocs` de XAMPP para poder ejecutarlo localmente.
- Acceso a un navegador web moderno como Chrome, Firefox, Safari, etc.

## Instrucciones de uso

1. Clona este repositorio o descarga el código fuente en tu computadora.
2. Copia la carpeta del proyecto en la carpeta `htdocs` de tu instalación de XAMPP.
3. Inicia tu servidor Apache y MySQL desde el panel de control de XAMPP.
4. Abre un navegador web y ve a la URL `http://localhost/calculadora/`.
5. Podrás utilizar la calculadora para realizar operaciones matemáticas básicas.

## Estructura del proyecto

- **`models/`**: Contiene el modelo de la aplicación que se comunica con la API externa.
- **`views/`**: Contiene las vistas HTML y CSS de la calculadora.
- **`controllers/`**: Contiene los controladores de la aplicación que manejan las solicitudes del usuario.
- **`assets/`**: Contiene archivos estáticos como estilos CSS, scripts JavaScript y librerías de Bootstrap.

<style>
  body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
  }

  h1 {
    color: #0366d6;
  }

  h2 {
    color: #0366d6;
  }

  ul {
    list-style-type: disc;
    padding-left: 20px;
  }

  code {
    background-color: #f3f4f6;
    border-radius: 3px;
    padding: 3px 5px;
    font-family: Consolas, monospace;
  }
</style>
