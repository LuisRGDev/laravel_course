
<!-- session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
} -->
@extends('layouts.app')

@section('titulo', 'Pagina TI')
    @section('content')
    <main>
      <section class="article-vid">
        <article id="Descripcion">
          <h2 class="article__title">MI LABOR EN EL AREA DE TI</h2>
          <p class="article__content">
            En mi rol como empleado de apoyo en el área de TI, cada día es una
            nueva oportunidad para ayudar, aprender y asegurar que todo funcione
            como debe. Mi trabajo consiste en estar ahí cuando se me necesita,
            con buena actitud, disposición y entusiasmo, disfrutando cada reto y
            aportando a que todo marche de forma fluida. Siempre listo para
            ayudar!
          </p>
        </article>
        <figure>
          <!-- <video src="../multimedia.mp4" class="video1" controls width="600" height="400" ></video> -->

          <video autoplay loop playsinline>
            <source
              src="https://www.shutterstock.com/shutterstock/videos/3650347131/preview/stock-footage-digital-visualization-of-cloud-computing-showing-a-networked-connection-between-data-center.webm"
              type="video/mp4"
            />
            tu navegador no soporta fomatos de video
          </video>

        </figure>
      </section>

 
      <section class="tareas" id="tareas">
        <p class="title-tasks">
          Entre las tareas que realizo mas comunmente estan las siguientes:
        </p>
        <ul class="list-tasks">
          <span id="left-list">
            <li class="task-elemet">Ser hacker</li>
            <li>Manejo basico de la pagina middleby.com.mx</li>
            <li>Alta de nuevo ingreso</li>
            <li>Solicitudes de pago</li>
            <li>Resolucion de tickets</li>
            <li>Reparacion de equipo de computo</li>
          </span>
          <span id="right-list">
            <li>Manuales de Infor Syteline</li>
            <li>Manuales de actividades</li>
            <li>Administracion del directorio de lineas Telcel</li>
            <li>Alta/Asignacion de lineas Telcel</li>
            <li>Administración/Gestion de herramientas de TI</li>
            <li>Preparacion de salas para juntas o capacitaciones</li>
          </span>
        </ul>
        <div class="area-btn-tareas">
          <a
            class="tareas-btn"
            href="https://middlebycorp-my.sharepoint.com/:x:/g/personal/larosales_middleby_com_mx/IQBeO8--wT5qSZqVn2GXUBqxAQt4441N2sXDmtUHRpBdJQk?e=eokTsM"
            target="_blank"
            >TAREAS.xlsx</a
          >
        </div>
      </section>

      <section class="valores">
        <h2 class="valores__title">VALORES DEL "THE NEW ONE"</h2>
        <ul class="valores__list">
          <li>
            🤝 Respeto: Ayuda a tratar bien a los usuarios y compañeros, creando
            un ambiente de confianza y buen trabajo en equipo.
          </li>
          <li>
            🔎✨ Honestidad: Genera confianza, porque el empleado actúa con
            transparencia y cuida correctamente la información y los sistemas.
          </li>

          <li>
            🌿 Humildad: Permite aprender cada día, pedir apoyo cuando hace
            falta y compartir conocimientos sin actitudes de superioridad.
          </li>
          <li>
            🛠️ Perseverancia: Motiva a seguir buscando soluciones cuando surgen
            problemas técnicos difíciles.
          </li>

          <li>
            📌 Responsabilidad: Asegura que las tareas se cumplan a tiempo y que
            los equipos y sistemas se utilicen correctamente.
          </li>
        </ul>
      </section>

      <section id="Contacto" class="formulario">
        <header class="titulo"><h2>Contacto</h2></header>
        <main class="cont-form-izquierda">
          <form action="#">
            <div>
              <input
                type="text"
                id="name_contact"
                name="name"
                required
                placeholder="  Nombre"
              />
            </div>

            <div>
              <input
                type="email"
                id="email_contact"
                name="email"
                required
                placeholder="  Email"
              />
            </div>

            <div>
              <label class="text-comment" for="comment"></label>
            </div>
            <div>
              <textarea
                class="area-comment"
                name="comment"
                id="comment"
                placeholder=" Mensaje"
                rows="1"
                style="resize: auto"
              ></textarea>
            </div>

            <button class="boton-env" type="submit">Enviar formulario</button>
          </form>
        </main>
        <aside class="cont-form-derecha">
          <ul class="contact-resources">
            <li>
              <img
                class="form-icons"
                src="https://cdn-icons-png.flaticon.com/128/0/191.png"
                alt="Imagen de telefono"
              />+52 5544931280
            </li>
            <li>
              <img
                class="form-icons"
                src="https://cdn-icons-png.flaticon.com/128/149/149059.png"
                alt="Imagen de ubicacion"
              />Calle nueva 47370, Fracc de caja
            </li>
            <li>
              <img
                class="form-icons"
                src="https://cdn-icons-png.flaticon.com/128/2550/2550260.png"
                alt="Nombre a dirigirse"
              />
              Luis Alberto Rosales Garcia
            </li>
          </ul>
        </aside>
      </section>
    </main>
    @endsection