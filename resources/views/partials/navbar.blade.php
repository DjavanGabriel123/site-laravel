<nav class="blue">
    <div class="nav-wrapper container">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="{{ route('home') }}" class="brand-logo light">DothCom</a>

        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('servicos') }}">Serviços</a></li>
            <li><a href="{{ route('galeria') }}">Galeria</a></li>
            <li><a href="{{ route('contato') }}">Contato</a></li>
        </ul>


        <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="{{ asset('Images/pexels-fauxels-3183197.jpg') }}" alt="image">
                    </div>
                    <!--<a href="#user"><img class="circle" src="images/yuna.jpg"></a>-->
                    <a href="#name"><span class="black-text name  text-lighten-4">FSN Cursos</span></a>
                    <a href="#email"><span class="black-text email text-lighten-4">jdandturk@gmail.com</span></a>
                </div>
            </li>
            <!--<li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>-->
            <li><a href="#!">Menu</a></li>
            <li>
                <div class="divider"></div>
            </li>

            <li><a href="{{ route('home') }}"><i class="material-icons blue-text text-lighten-2">home</i>Home</a></li>

            <li><a href="{{ route('servicos') }}"><i class="material-icons blue-text text-lighten-2">engineering</i>Serviços</a>
            </li>
            <li><a href="{{ route('galeria') }}"><i class="material-icons blue-text text-lighten-2">photo_camera</i>Galeria</a>
            </li>
            <li><a href="{{ route('contato') }}"><i class="material-icons blue-text text-lighten-2">contact_phone</i>Contato</a>
            </li>
        </ul>
    </div>
</nav>
