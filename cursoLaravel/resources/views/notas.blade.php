@extends('layouts.app')

@section('titulo', 'Pagina TI')

@section('content')
<main>
      <div class="task_h1">
        <h1>NOTAS DE APOYO</h1>
        <p class="task_notep">
        Como primera recomendación, te sugiero utilizar HP Support Assistant. Es una herramienta muy útil que me ha ayudado a resolver una gran cantidad de tickets.

        En la mayoría de los casos, está relacionada con actualizaciones y correcciones que HP envía directamente a cada laptop según su modelo. Gracias a esto, puedes solucionar problemas de forma rápida y automática.

        Si la utilizas correctamente, puede ayudarte a resolver aproximadamente el 50% de los tickets sin necesidad de intervenciones más complejas.
        </p>

        <p class="task_notep">

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