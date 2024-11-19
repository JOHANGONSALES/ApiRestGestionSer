# ✨ Proyecto Backend - WebVR SEO BD Life ✨
<div align="center"> <img src="https://via.placeholder.com/150x150.png?text=BACKEND" alt="Backend Logo" style="border-radius: 50%; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);"/> </div>
1. Descripción General 🌟
Este proyecto es un backend inmersivo diseñado para WebVR SEO BD Life, desarrollado con Symfony 5.4.
No solo ofrece servicios REST API, sino que incluye vistas interactivas para la gestión de datos.
Se enfoca en:

Seguridad avanzada (con autenticación JWT).
Gestión de usuarios robusta.
Preparación para integración con proyectos front-end o VR.
Repositorio Frontend relacionado aquí.

2. Tecnologías Utilizadas 💻
Backend 🔧
Framework: Symfony 5.4
Lenguaje: PHP 8.2
Dependencias: Composer
Plantillas: Twig
Base de Datos: MySQL
Autenticación: JWT
Frontend 🎨
Visuales: Bootstrap
Gestión: Vistas administrativas integradas.
Otras Herramientas 🛠
Servidor Local: XAMPP
Control de Versiones: Git
<div align="center"> <img src="https://via.placeholder.com/600x200.png?text=Diagrama+Tecnológico" alt="Diagrama Tecnológico"/> </div>
3. Funcionalidades Implementadas 🌟
3.1 Gestión de Usuarios 🙋‍♂️
Registro:
Validación avanzada de correos electrónicos.
Bloqueo de intentos fraudulentos.
Autenticación:
JWT para seguridad robusta.
Roles definidos: usuarios estándar y administradores.
Recuperación de Contraseña:
Correos automáticos con validación estricta.
3.2 Gestión de Recursos 📂
Vista Administrativa:
Edición de recursos desde un panel amigable.
API REST:
Soporte para CRUD (crear, leer, actualizar, eliminar).
Endpoints seguros y documentados.
4. Instalación ⚙️
4.1 Requisitos Previos 📋
PHP >= 8.2
Composer
XAMPP o similar
Git
4.2 Pasos de Instalación 🛠
Clona el repositorio del proyecto:
bash
Copiar código
git clone https://github.com/JOHANGONSALES/ApiRestGestionSer.git
cd ApiRestGestionSer
Instala las dependencias:
bash
Copiar código
composer install
Configura el entorno:
Actualiza el archivo .env con:

URL de base de datos: DATABASE_URL.
DSN del correo: MAILER_DSN.
Crea y migra la base de datos:

bash
Copiar código
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
Inicia el servidor local:
bash
Copiar código
symfony server:start
5. Seguridad 🔐
JWT: Protección avanzada para los endpoints.
Validación de correos: Filtrado de intentos fraudulentos.
Roles y Permisos:
Administradores con acceso ampliado.
Restricciones claras para usuarios estándar.
6. Futuras Mejoras 🚀
Autenticación OAuth para mayor flexibilidad.
Integración con servicios en la nube (AWS, Firebase).
Documentación API automatizada con Swagger.
<div align="center"> <img src="https://via.placeholder.com/500x250.png?text=Gracias+por+Explorar" alt="¡Gracias!" /> <h2>¡Hecho con 💙 para SEO BD Life!</h2> </div>