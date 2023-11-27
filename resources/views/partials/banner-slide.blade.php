<div class="slider">
    <ul class="slides">
        <li>

            <img src="{{ asset('Images/pexels-andrea-piacquadio-920382.jpg') }}" alt="image">
            <div class="caption left-align">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam inventore distinctio fuga facilis
                    voluptatum! Culpa rem quas nesciunt fuga expedita!</h5>

                <a href="#modal-lead" class="btn btn-small blue modal-trigger">Quero me Cadastrar</a>
            </div>
        </li>

        <li>

            <img src="{{ asset('Images/pexels-vlada-karpovich-4050388.jpg') }}" alt="image">
            <div class="caption right-align">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam inventore distinctio fuga facilis
                    voluptatum! Culpa rem quas nesciunt fuga expedita!</h5>

                <a href="#modal-lead" class="btn btn-small blue modal-trigger">Quero me Cadastrar</a>
            </div>
        </li>
    </ul>
</div>

<div class="modal" id="modal-lead">
    <div class="modal-content">
        <h3 class="flow-text">Preencha todos os campos</h3>

        <form action="" method="post">
            @csrf

            <div class="row">

                <div class="col s12 m6 input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="name" id="name" required>
                    <label for="name">Digite seu nome</label>
                </div>

                <div class="col s12 m6 input-field">
                    <i class="material-icons prefix">phone_iphone</i>
                    <input type="tel" name="tel" id="tel" required>
                    <label for="tel">Digite seu telefone</label>
                </div>

                <div class="col s12 input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" required>
                    <label for="email">Digite seu E-mail</label>
                </div>

                <div class="col s12 input-field">
                    <input type="submit" value="enviar" class="btn btn-small blue">
                    <input type="reset" value="limpar" class="btn btn-small red">
                </div>
            </div>
        </form>
    </div>
</div>
