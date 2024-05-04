<div class="bg-accent">
    <div class="flex flex-col md:flex-row">
        <div class="bg-white w-full md:max-w-xl min-h-screen pt-16 pb-16 overflow-y-auto">
            <div class="container">
                <h2 class="inline-block title-base200 font-medium mb-8 icon-title">
                    QuizzApp
                </h2>
                <h3 class="title-base100 text-base-200 mb-4">Registro</h3>
                <x-inputs.input label="Correo electronico" type="email" name="email" id="email"
                    value="{{ old('email') }}" required autofocus placeholder="correo@ejemplo.com" />
                <x-inputs.input-password id="password" name="password" placeholder="Escribe tu contraseña"
                    label="Contraseña" value="{{ old('password') }}" required autofocus />
                <x-inputs.input-password id="confirmPassword" name="confirmPassword" placeholder="Vuelve a escribir la contraseña"
                    label="Confirmar Contraseña" value="{{ old('password') }}" required autofocus />
                <div class="mt-8">
                    <x-buttons.btn-primary class="w-full" label="Continuar" />
                </div>
                <p class="text-natural title-small mt-6 text-center">
                    ¿Ya tienes una cuenta?
                    <x-buttons.link-natural class="!title-small" url="home" label="Iniciar sesión" />
                </p>
            </div>
        </div>
    </div>
</div>