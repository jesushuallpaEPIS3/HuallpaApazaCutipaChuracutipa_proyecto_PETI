Aquí tienes el README con el contenido que pediste, adaptado para incluir todos los pasos detallados y la información adicional:

---

# Proyecto PETI

Este repositorio contiene el proyecto **PETI**, el cual puedes desplegar utilizando Docker. A continuación, se detallan los pasos necesarios para clonar y ejecutar el proyecto en tu máquina local.

## Integrantes del Proyecto

- Albert Kenyi Apaza Ccalle
- Ricardo Cutipa Gutierrez
- Erick Churacutipa Blass
- Jesus Huallpa Maron
- **Curso:** PETI

## Descripción del Proyecto

Este proyecto es una página web que facilita la gestión de elementos clave como visión, misión, objetivos, cadena de valor, matriz FODA y valores organizacionales. Cada usuario puede crear una cuenta y agregar estos valores específicos para su propio perfil. 






### Herramientas y Tecnologías Utilizadas

[![Apache](https://img.shields.io/badge/Apache-D22128?style=for-the-badge&logo=apache&logoColor=white)](https://httpd.apache.org/)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)](https://www.docker.com/)
[![Google Console](https://img.shields.io/badge/Google_Console-4285F4?style=for-the-badge&logo=google-cloud&logoColor=white)](https://console.cloud.google.com/)
[![Gemini IA](https://img.shields.io/badge/Gemini-FFD700?style=for-the-badge&logo=google&logoColor=black)](https://gemini.google.com/)
[![GitHub Codespaces](https://img.shields.io/badge/GitHub_Codespaces-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/features/codespaces)


## Requisitos

Para desplegar el proyecto, asegúrate de contar con lo siguiente en tu máquina local:

- Docker y Docker Compose
- Git

## Instrucciones de Uso

### Paso 01: Clonar el repositorio

Clona el repositorio en tu máquina local usando el siguiente comando:

```bash
git clone https://github.com/jesushuallpaEPIS3/HuallpaApazaCutipaChuracutipa_proyecto_PETI.git
```

### Paso 02: Navegar al directorio del proyecto

Dirígete al directorio clonado:

```bash
cd HuallpaApazaCutipaChuracutipa_proyecto_PETI
```

### Paso 03: Abrir el proyecto en tu editor

Si usas Visual Studio Code, puedes abrir el proyecto con:

```bash
code .
```

### Paso 04: Construir y ejecutar el contenedor

Ejecuta el siguiente comando para construir los contenedores y levantarlos en segundo plano:

```bash
docker-compose up -d --build
```

### Paso 05: Esperar a que cargue

Permite que Docker complete el proceso de configuración y despliegue de los contenedores.

### Paso 06: Acceder a la aplicación

Una vez que los contenedores estén en ejecución, puedes acceder a la aplicación en tu navegador web en:

- **Aplicación web:** [http://localhost](http://localhost)
- **phpMyAdmin:** [http://localhost:8080](http://localhost:8080)

### Paso 07: Configurar la API Key (opcional)

Para configurar tu propia API key, navega a la carpeta `config/configAPI.php` y edita el archivo de configuración con tu clave API:

```php
<?php
return [
    'API_KEY' => 'AQUI VA TU APIKEY' 
];
?>
```

### Paso 08: Modificar el Hostname (opcional)

Si no vas a utilizar el contenedor para conectarte a la base de datos y prefieres hacer pruebas de desarrollo en Windows, modifica el hostname en el archivo `config/db.php`:

```php
<?php
class db {
    private $host = "db"; // Cambiar a "localhost" para pruebas de desarrollo en Windows
    private $dbname = "peti";
    private $user = "root";
    private $password = "";

    public function conexion() {
        try {
            $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);
            $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";charset=utf8mb4", $this->user, $this->password);
            return $PDO;
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>
```

### Paso 09: Acceder al entorno de la aplicación

Para acceder al contenedor de la aplicación y ejecutar comandos en él, usa el siguiente comando:

```bash
docker exec -it huallpaapazacutipachuracutipa_proyecto_peti-app-1 bash
```

### Paso 10: Instalar herramientas adicionales (opcional)

Para instalar el editor `nano` en el contenedor, ejecuta los siguientes comandos:

```bash
apt-get update
apt install nano
```

## Detener los Contenedores

Si deseas detener los contenedores en cualquier momento, utiliza el siguiente comando:

```bash
docker-compose down
```


Para documentar las tareas terminadas en el README, puedes agregar una sección llamada **Historial de Tareas Completadas** o **Tareas Terminadas** con el formato de cada tarea, el responsable y la fecha de cierre. A continuación, te muestro cómo puedes estructurarlo:

---

### Tareas Terminadas

| Tarea                                    | Asignado a         | Fecha de cierre   |
|------------------------------------------|--------------------|-------------------|
| UI Login                                  | @RicardoCutipa     | Hace 2 días       |
| Dockerización                             | @AlbertApaza       | Hace 2 días       |
| Modificación HOOK (Protección API Key)    | @AlbertApaza       | Hace 3 días       |
| Creación de Nuevo Usuario (Empresas)      | @AlbertApaza       | Hace 3 días       |
| Creación de Captcha en Login              | @AlbertApaza       | Hace 3 días       |
| Implementación de IA - Geminis (Visión)   | @AlbertApaza       | Hace 3 días       |
| Análisis Interno y Externo                | @jesushuallpaEPIS3 | Hace 5 días       |
| Código Análisis Interno y Externo         | @jesushuallpaEPIS3 | Hace 3 semanas    |
| Implementación de IA - Geminis (Misión)   | @AlbertApaza       | Hace 3 semanas    |
| Estructura del Análisis Interno Externo   | @jesushuallpaEPIS3 | Hace 3 semanas    |
| Conexión a la DB e Ingreso de Datos       | @erick00xx         | Hace 3 semanas    |
| Comprobación de Inicio de Sesión          | @erick00xx         | Hace 3 semanas    |
| Estructuración del Proyecto (MVC)         | @erick00xx         | Hace 3 semanas    |
| Código Index                              | @RicardoCutipa     | Hace 1 mes        |
| Información de Empresa                    | @AlbertApaza       | Hace 1 mes        |
| Código Login                              | @RicardoCutipa     | Hace 1 mes        |
| Resumen del Plan                          | @AlbertApaza       | Hace 1 mes        |
| Código Visión                             | @jesushuallpaEPIS3 | Hace 1 mes        |
| Código Valores                            | @erick00xx         | Hace 1 mes        |
| Código Misión                             | @RicardoCutipa     | Hace 3 semanas    |
| Actualización del README                  | @AlbertApaza       | Hace 3 semanas    |
| Código Objetivos                          | @AlbertApaza       | Hace 1 mes        |

---

Esta sección le da al lector del README un resumen claro de quién ha trabajado en cada tarea y cuándo se completó.
