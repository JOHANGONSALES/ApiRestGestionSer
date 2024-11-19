#Documentación del Proyecto Backend - WebVR SEO BD Life
1. Descripción General
El proyecto es un backend desarrollado con Symfony 5.4 para un sistema inmersivo WebVR SEO BD Life. Este backend no solo proporciona servicios REST API, sino que también incluye vistas para la gestión de datos. Se enfoca en la seguridad y la gestión de usuarios, además de preparar el terreno para la integración con proyectos frontales o VR.

2. Tecnologías Utilizadas
Backend
Framework: Symfony 5.4
Lenguaje: PHP 8.2
Gestión de Dependencias: Composer
Plantillas: Twig
Bases de Datos: SQL (MySQL)
Autenticación: JWT (JSON Web Tokens)
Frontend
Plantillas Visuales: Bootstrap
Integración: Vista para gestión de datos.
Otras Herramientas
Servidor Local: XAMPP
Control de Versiones: Git
3. Funcionalidades Implementadas
3.1. Gestión de Usuarios
Registro de Usuarios:
Los usuarios pueden registrarse con correo electrónico y contraseña. El sistema valida correos electrónicos y bloquea intentos de fraude.
Autenticación y Roles:
Autenticación mediante JWT, diferenciando entre usuarios estándar y administradores. Los administradores tienen acceso a módulos específicos para editar recursos.
Recuperación de Contraseña:
Envío de correos electrónicos para restablecer contraseñas. Si el correo es inválido o fraudulento, se rechaza el intento.
3.2. Gestión de Recursos
Vista para Administradores:
Permite a los administradores editar y gestionar los recursos que serán expuestos a través de la API.
API REST:
Servicio para consultar, crear, actualizar y eliminar recursos a través de endpoints seguros.
4. Instalación
4.1. Requisitos Previos
PHP >= 8.2
Composer
XAMPP (o cualquier servidor local compatible con PHP y MySQL)
Git
4.2. Instrucciones de Instalación
Clona el repositorio del proyecto:
bash
Copiar código
git clone <repositorio-url>
cd <directorio-del-proyecto>
Instala las dependencias con Composer:
bash
Copiar código
composer install
Configura las variables de entorno en el archivo .env. Asegúrate de definir correctamente:
Base de Datos (DATABASE_URL)
DSN del Correo (MAILER_DSN para enviar correos electrónicos)
Crea y migra la base de datos:
bash
Copiar código
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
Inicia el servidor local de Symfony:
bash
Copiar código
symfony server:start
5. Endpoints de la API
5.1. Autenticación
POST /api/login: Inicia sesión y devuelve un token JWT.
POST /api/register: Registra un nuevo usuario.
5.2. Gestión de Usuarios
GET /api/users: Lista todos los usuarios (solo para administradores).
PUT /api/users/{id}: Actualiza un usuario específico.
DELETE /api/users/{id}: Elimina un usuario específico.
5.3. Recuperación de Contraseña
POST /api/forgot-password: Envía un correo de recuperación.
POST /api/reset-password: Restablece la contraseña con el token enviado.
6. Diseño de Base de Datos
Tablas Principales:
User
Campo	Tipo	Descripción
id	INT	Identificador único del usuario.
email	VARCHAR(180)	Correo electrónico único.
password	VARCHAR(255)	Contraseña cifrada.
roles	JSON	Roles asignados al usuario.
isVerified	BOOLEAN	Indica si el correo está verificado.
ResetPasswordRequest
Campo	Tipo	Descripción
id	INT	Identificador único.
user_id	INT	Referencia al usuario.
selector	VARCHAR(20)	Selector único para el token.
hashed_token	VARCHAR(100)	Token cifrado para validación.
requested_at	DATETIME	Fecha de solicitud.
expires_at	DATETIME	Fecha de expiración del token.
7. Seguridad
JWT: Todos los endpoints protegidos requieren un token JWT válido en el encabezado de la solicitud.
Validación de Correos: Los intentos con correos inválidos son bloqueados automáticamente.
Roles y Permisos: Los usuarios no autenticados o sin los permisos adecuados no pueden acceder a recursos restringidos.
8. Pruebas
8.1. Requisitos
Postman o cURL para probar los endpoints.
Base de datos de prueba configurada en el entorno de desarrollo.
8.2. Ejemplos
Registro de Usuario:
json
Copiar código
POST /api/register
{
    "email": "usuario@example.com",
    "password": "password123"
}
Recuperación de Contraseña:
json
Copiar código
POST /api/forgot-password
{
    "email": "usuario@example.com"
}
9. Futuras Mejoras
Implementación de autenticación OAuth para mayor flexibilidad.
Integración con servicios en la nube como AWS o Firebase.
Mejorar la documentación automatizada con herramientas como Swagger o Api Platform.
