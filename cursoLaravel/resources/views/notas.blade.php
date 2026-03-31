@extends('layouts.app')

@section('titulo', 'Pagina TI')

@section('content')
<main>
      <div class="task_h1">
        <h1>Notas de apoyo</h1>
        <p class="task_notep">
          En esta seccion podras visualizar las notas acerca de problemas o
          tickets que ocurren mas comunmente.
        </p>
      </div>

      <section id="Contacto" class="formulario">
        <header class="titulo"><h2>Contacto</h2></header>
        <main class="cont-form-izquierda">
          <form action="#">
            <div>
              <input
                type="text"
                id="name"
                name="name"
                required
                placeholder="  Nombre"
              />
            </div>

            <div>
              <input
                type="email"
                id="email"
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