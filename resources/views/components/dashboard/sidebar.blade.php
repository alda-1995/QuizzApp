<!-- Sidenav -->
<nav id="sidenav"
    class="fixed left-0 top-0 z-[1035] h-screen w-60 -translate-x-full xl:translate-x-0 
    overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)]">
    <div class="mb-3 px-6 flex items-center py-6 outline-none text-gray-800 title-parrafo">
        <span class="inline-block">Menú</span>
    </div>
    <ul class="relative list-none pb-6">
        <li>
            <x-dashboard.item-menu class="bg-gray-100" url="home" label="Perfil">
                <x-slot name="icon">
                    <span class="iconify" data-icon="mdi-account-outline"></span>
                </x-slot>
            </x-dashboard.item-menu>
        </li>
        <li>
            <x-dashboard.item-menu url="home" label="Mis quizz">
                <x-slot name="icon">
                    <span class="iconify" data-icon="mdi-text-box-edit-outline"></span>
                </x-slot>
            </x-dashboard.item-menu>
        </li>
    </ul>
</nav>
