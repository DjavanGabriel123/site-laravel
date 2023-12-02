@extends('Site.layout')

@section('tittle, Página Home')

@section('content')

    <div class="row">
        <div class="col s2 menu-lateral">
            <span class="col s12 center text-white">Material Dashboard 2<br>Laravel</span>

            <div class="border-3"></div>


            <div class="col s12 examples">
                <h6 class="white-color center">LARAVEL EXAMPLES</h6>

                <div class="interative-user center col s7">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
        </div>

        <div class="col s10">

            <p>&nbsp;</p>

            <div class="col s3">
                <div class="card">
                    <div class="z-depth-2 card-image #000000 black">
                        <i class="white-text fa-solid fa-money-bill"></i>
                    </div>

                    <div class="card-content">
                        <div class="col s12">
                            <p class="title right grey-text day">Today's Money</p>
                        </div>

                        <div class="col s12">
                            <p class="right value">$53k</p>
                        </div>

                        <div class="border"></div>

                        <div class="col s12 text-today">
                            <p class="black-text day"><span class="green-text porcentgem">+55%</span>than lask week</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s3">
                <div class="card">
                    <div class="z-depth-2 card-image #f06292 pink lighten-2">
                        <i class="white-text fa-solid fa-user"></i>
                    </div>

                    <div class="card-content">
                        <div class="col s12">
                            <p class="title right grey-text day">Today's Users</p>
                        </div>

                        <div class="col s12">
                            <p class="right value">2,300</p>
                        </div>

                        <div class="border"></div>

                        <div class="col s12 text-today">
                            <p class="black-text day"><span class="green-text porcentgem">+3%</span>than lask month</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s3">
                <div class="card">
                    <div class="z-depth-2 card-image #66bb6a green lighten-1">
                        <i class="white-text fa-solid fa-user"></i>
                    </div>

                    <div class="card-content">
                        <div class="col s12">
                            <p class="title right grey-text day">New Clients</p>
                        </div>

                        <div class="col s12">
                            <p class="right value">3,462</p>
                        </div>

                        <div class="border"></div>

                        <div class="col s12 text-today">
                            <p class="black-text day"><span class="red-text porcentgem">-2%</span>than yesterday</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s3">
                <div class="card">
                    <div class="z-depth-2 card-image #2196f3 blue">
                        <i class="white-text fa-solid fa-money-bill"></i>
                    </div>

                    <div class="card-content">
                        <div class="col s12">
                            <p class="title right grey-text day">Sales</p>
                        </div>

                        <div class="col s12">
                            <p class="right value">$103,430</p>
                        </div>

                        <div class="border"></div>

                        <div class="col s12 text-today">
                            <p class="black-text day"><span class="green-text porcentgem">+5%</span>than yesterday</p>
                        </div>
                    </div>
                </div>
            </div>


            <p>&nbsp;</p>

            <div class="row">

                <section class="col s12 espaço-grafico">
                    <div class="col s4">
                        <div class="card-medio-1 z-depth-2">
                            <div class="card-grafico">
                                <img src="{{ asset('Images/Graficos/grafico-1.png') }}"
                                    class="responseive-img #e91e63 pink">
                                <h6 class="black-text font-weight">Website Views</h6>
                                <p class="grey-text">Last Campaing Perfomace</p>

                                <div class="border-2"></div>

                                <p class="update grey-text"><i class="relogio fa-regular fa-clock grey-text"></i> campaign
                                    sent 2 days ago</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card-medio-2 z-depth-2">
                            <div class="card-grafico">
                                <img src="{{ asset('Images/Graficos/grafico-2.png') }}"
                                    class="responseive-img #4caf50 green">
                                <h6 class="black-text font-weight">Dayle Sales</h6>
                                <p class="grey-text"><b>(+15)</b> increase in otday sales.</p>

                                <div class="border-2"></div>

                                <p class="update grey-text"><i class="relogio fa-regular fa-clock grey-text"></i> uptade 4
                                    min ago</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card-medio-2 z-depth-2">
                            <div class="card-grafico">
                                <img src="{{ asset('Images/Graficos/grafico-3.png') }}"
                                    class="responseive-img #000000 black">
                                <h6 class="black-text font-weight">Completed Tasks</h6>
                                <p class="grey-text">Last Campaing Perfomace</p>

                                <div class="border-2"></div>

                                <p class="update grey-text"><i class="relogio fa-regular fa-clock grey-text"></i> just
                                    updated</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <p>&nbsp;</p>



            <div class="col s12 projects">
                <div class="col s8">
                    <h6 class="left grey-text font-weight">Projects</h6>
                </div>

                <div class="col s12 menu-lef">
                    <p class="text-negrito left black-text"><i class="icon-check fa-solid fa-check"></i>30 done</p>
                    <i class="fa fa-ellipsis-v right tres-pontos" aria-hidden="true"></i>
                    <p class="mes grey-text">this month</p>
                </div>

                <table class="responsive-table">
                    <thead>
                        <tr>
                            <td class="black-text">COMPANES</td>
                            <td class="black-text">MEMBERS</td>
                            <td class="black-text">BUDGET</td>
                            <td class="black-text">COMPLETION</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class=" black-text">Material XD Version</td>
                            <td></td>
                            <td class="black-text">$0.87</td>
                        </tr>
                        <tr>
                            <td class="black-text">Add Progress Track</td>
                            <td></td>
                            <td class="black-text">$3.76</td>
                        </tr>
                        <tr>
                            <td class="black-text">Fix Platform Errors</td>
                            <th></th>
                            <td class="black-text">$7.00</td>
                        </tr>
                        <tr>
                            <td class="black-text">Launch our Mobile App</td>
                            <td></td>
                            <td class="black-text">BUDGET</td>
                            <td class="black-text">COMPLETION</td>
                        </tr>
                        <tr>
                            <td class="black-text">Add the New Pricing Page/th>
                            <td></td>
                            <td class="black-text">BUDGET</td>
                            <td class="black-text">COMPLETION</td>
                        </tr>
                        <tr>
                            <td class="black-text">Redesign New Online Shop</td>
                            <td></td>
                            <td class="black-text">BUDGET</td>
                            <td class="black-text">COMPLETION</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
