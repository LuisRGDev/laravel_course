<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de usuarios - Admin</title>
    <!-- Usamos asset() para cargar tu CSS desde la carpeta public/css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <section class="section-crud">
        <h1 class="crud-title">CRUD DE USUARIOS</h1>
        
        <!-- Mensaje de éxito si existe -->
        @if(session('success'))
            <div style="background: #4CAF50; color: white; padding: 10px; margin-bottom: 20px; border-radius: 5px;">
                {{ session('success') }}
            </div>
        @endif

        <div class="users-table">
            <table class="table-crud">
                <thead>
                    <tr>
                        <th class="table-columns">ID</th>
                        <th class="table-columns">EMAIL</th>
                        <th class="table-columns">ROL</th>
                        <th class="table-columns" colspan="2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="table-data">{{ $user->id }}</td>
                            <td class="table-data">{{ $user->email }}</td>        
                            <td class="table-data">{{ strtoupper($user->role) }}</td>    
                            
                            <!-- Botón Editar -->
                            <td class="table-data--button">
                                <a class="crud-buttons--update" href="{{ route('admin.edit', $user) }}">
                                    EDITAR
                                </a>
                            </td>

                            <!-- Botón Eliminar con Formulario -->
                            <td class="table-data--button">
                                <form class="form--delete" action="{{ route('admin.destroy', $user) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button--deleteuser" type="submit" onclick="return confirm('¿Eliminar usuario?')">
                                        ELIMINAR
                                    </button>
                                </form>
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>  
        </div>

        <div style="margin-top: 20px;">
            <a class="out-button" href="{{ route('dashboard') }}">VOLVER AL PANEL</a>
            
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="out-button" style="background: #ff4444; border: none; cursor: pointer;">
                    CERRAR SESIÓN
                </button>
            </form>
        </div>
    </section>
</body>
</html>
