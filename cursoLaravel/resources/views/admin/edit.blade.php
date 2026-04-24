<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario - Admin</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <section class="section-crud">
        <h1 class="crud-title">EDITAR USUARIO</h1>

        <div class="container" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px); border-radius: 20px; padding: 2rem; box-shadow: 0 8px 32px rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.1); height: auto; margin-top: 2rem;">
            <form action="{{ route('admin.update', $user) }}" method="POST" class="form-container" style="width: 100%;">
                @csrf
                @method('PUT')

                <div class="input-container" style="margin-bottom: 1.5rem; width: 100%;">
                    <label style="display: block; margin-bottom: 0.5rem; color: #fff; font-family: var(--fuente-principal);">Correo Electrónico:</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" required 
                           style="width: 100%; padding: 10px; border-radius: 8px; border: none; background: rgba(255,255,255,0.9);">
                    @error('email')
                        <small style="color: #ff4444; display: block; margin-top: 5px;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="input-container" style="margin-bottom: 1.5rem; width: 100%;">
                    <label style="display: block; margin-bottom: 0.5rem; color: #fff; font-family: var(--fuente-principal);">Rol del Usuario:</label>
                    <select name="role" required style="width: 100%; padding: 10px; border-radius: 8px; border: none; background: rgba(255,255,255,0.9);">
                        <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>Usuario</option>
                        <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Administrador</option>
                    </select>
                </div>

                <div class="input-container" style="margin-bottom: 1.5rem; width: 100%;">
                    <label style="display: block; margin-bottom: 0.5rem; color: #fff; font-family: var(--fuente-principal);">Nueva Contraseña (dejar vacío para no cambiar):</label>
                    <input type="password" name="password" placeholder="Mínimo 8 caracteres"
                           style="width: 100%; padding: 10px; border-radius: 8px; border: none; background: rgba(255,255,255,0.9);">
                    @error('password')
                        <small style="color: #ff4444; display: block; margin-top: 5px;">{{ $message }}</small>
                    @enderror
                </div>

                <div class="button-container" style="display: flex; gap: 15px; justify-content: center; margin-top: 1rem;">
                    <button type="submit" class="crud-buttons--update" style="padding: 12px 24px; font-size: 1rem; cursor: pointer; border: none;">
                        ACTUALIZAR
                    </button>
                    <a href="{{ route('admin.index') }}" class="out-button" style="margin: 0; font-size: 1rem; padding: 10px 20px;">
                        CANCELAR
                    </a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
