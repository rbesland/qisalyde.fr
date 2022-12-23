<nav class="flex flex-row justify-between pt-2 pb-1 mb-10 items-center font-semibold border-solid border-b">
    <img class="logo" src="{{ Vite::image('logo.png') }}" alt="">
    <x-navbar.navlink title="Accueil" url="{{ route('home') }}" icon="icons.home-icon"/>
    <x-navbar.navlink title="Activités" url="{{ route('activities') }}" icon="icons.activities-icon"/>
    <x-navbar.navlink title="Evènements" url="{{ route('events') }}" icon="icons.calendar-icon"/>
    <x-navbar.navlink title="Blog" url="/" icon="icons.newspaper-icon"/>
    <x-navbar.navlink title="A propos" url="/" icon="icons.question-icon"/>
    <x-navbar.navlink title="Contact" url="/" icon="icons.mail-icon"/>
</nav>
