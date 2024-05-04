<div class="bg-accent">
    <div class="flex flex-col md:flex-row">
        <div class="bg-white w-full md:max-w-xl min-h-screen pt-16 pb-16 overflow-y-auto">
            <div class="container">
                <h2 class="inline-block title-base200 font-medium mb-8 icon-title">
                    QuizzApp
                </h2>
                <h3 class="title-base100 text-base-200 mb-4">Iniciar Sesión</h3>
                <x-inputs.input label="Correo electronico" type="email" name="email" id="email"
                    value="{{ old('email') }}" required autofocus placeholder="correo@ejemplo.com" />
                <x-inputs.input-password id="password" name="password" placeholder="Escribe tu contraseña"
                    label="Contraseña" value="{{ old('password') }}" required autofocus />

                <x-buttons.link-natural url="home" label="¿Olvidó la contraseña?" />
                <div class="mt-8">
                    <x-buttons.btn-primary class="w-full" label="Comenzar" />
                </div>
                <p class="text-natural title-small mt-6 text-center">
                    ¿No tiene una cuenta?
                    <x-buttons.link-natural class="!title-small" url="home" label="Registro" />
                </p>
            </div>
        </div>
    </div>
</div>