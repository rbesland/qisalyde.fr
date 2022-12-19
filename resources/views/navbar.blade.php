<nav class="flex flex-row justify-between pt-2 pb-1 mb-4 items-center font-semibold border-solid border-b">
    {{-- TODO: Refactor logo --}}
    {{-- <img class="logo" src="{{ Vite::image('logo.png') }}" alt="" srcset=""> --}}
    <img class="logo" src="" alt="" srcset="">
    <x-navbar.navlink title="Accueil" url="link" icon="icons.home-icon" />
    <x-navbar.navlink title="Activités" url="link" icon="icons.activities-icon" />
    <x-navbar.navlink title="Evènements" url="link" icon="icons.calendar-icon" />
    <x-navbar.navlink title="A propos" url="link" icon="icons.question-icon" />
    <x-navbar.navlink title="Contact" url="link" icon="icons.mail-icon" />
</nav>
