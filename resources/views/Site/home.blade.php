@extends('Site.layout')

@section('tittle, Página Home')

@section('content')

    <div class="row container">

        <div class="col s12 center-align">
            <p class="flow-text">Lorem ipsum dolor sit amet.</p>
        </div>

        <div class="col s12 divider"></div>

        <p>&nbsp;</p>


        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('Images/cards/card-1.jpg') }}" class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="tittle">Lorem ipsum dolor sit amet.</span>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium.</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('Images/cards/card-2.jpg') }}" class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="tittle">Lorem ipsum dolor sit amet.</span>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium.</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('Images/cards/card-3.jpg') }}" class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="tittle">Lorem ipsum dolor sit amet.</span>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium.</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>

    <div class="row container">
        <div class="col s12">
            <div class="divider"></div>
        </div>
    </div>

    <p>&nbsp;</p>

    <div class="row container">
        <section class="col s12">
            <h1 class="flow-text light">Lorem ipsum dolor sit amet.</h1>

            <p class="flow-text light justify">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex reiciendis delectus iure id eum eligendi animi
                dolores odio rerum quas, quia natus magnam consequuntur maxime suscipit praesentium perspiciatis? Quam id
                tempore temporibus eligendi iste unde neque fuga dicta cupiditate nam qui ab amet ratione laudantium, soluta
                quos aspernatur voluptate fugiat.
            </p>

            <p class="flow-text justfify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi sequi esse ab est
                ipsum
                quidem totam, quia
                minus doloribus reiciendis sed dicta illum harum cumque neque! Accusamus commodi velit quis?
            </p>

            <p>
                <a href="#!" class="waves-effect waves-light btn btn-small blue waves">Saiba mais</a>
                <a href="#!" class="waves-effect waves-light btn btn-small purple waves">Cadastre-se</a>
            </p>
        </section>
    </div>

    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('Images/parallax.jpg') }}" class="responsive-img">
        </div>
    </div>

    <p>&nbsp;</p>

    <div class="row container">

        <div class="col s12 m6 l4 center-align">
            <img src="{{ asset('Images/teams/team-1.jpg') }}" class="responseive-img circle">
            <p class="flow-text">Bia</p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, aperiam.
            </p>
            <p>
                <a href=""><i class="small fa-brands fa-facebook"></i></a>
                <a href=""><i class="small fa-brands fa-instagram"></i></a>
            </p>
        </div>

        <div class="col s12 m6 l4 center-align">
            <img src="{{ asset('Images/teams/team-2.jpg') }}" class="responseive-img circle">
            <p class="flow-text">Fernando</p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, aperiam.
            </p>
            <p>
                <a href=""><i class="small fa-brands fa-facebook"></i></a>
                <a href=""><i class="small fa-brands fa-instagram"></i></a>
            </p>
        </div>

        <div class="col s12 m6 l4 center-align">
            <img src="{{ asset('Images/teams/team-3.jpg') }}" class="responseive-img circle">
            <p class="flow-text">Douglas</p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, aperiam.
            </p>
            <p>
                <a href=""><i class="small fa-brands fa-facebook"></i></a>
                <a href=""><i class="small fa-brands fa-instagram"></i></a>
            </p>
        </div>
    </div>


@endsection
