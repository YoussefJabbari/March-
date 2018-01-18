<html>
<head>
    <title>Calendar</title>
    <!-- calendar.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/calendar.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="wrapper">
    <main>
        <!--<div class="toolbar">
          <div class="toggle">
            <div class="toggle__option">week</div>
            <div class="toggle__option toggle__option--selected">month</div>
          </div>
          <div class="current-month">June 2016</div>
          <div class="search-input">
            <input type="text" value="What are you looking for?">
            <i class="fa fa-search"></i>
          </div>
        </div>-->
        <div class="calendar">
            <div class="calendar__header">
                <div>Lundi</div>
                <div>Mardi</div>
                <div>Mercredi</div>
                <div>Jeudi</div>
                <div>Vendredi</div>
                <div>Samedi</div>
                <div>Dimanche</div>
            </div>
            <div class="calendar__traitement">
                <div>Achetez</div>
                <div>Fabriquez</div>
                <div>Vendez</div>
                <div>Collectez</div>
                <div>Planifiez</div>
                <div>Dépensez</div>
                <div>Reposez-vous</div>
            </div>
            <div class="calendar__week">
                <div class="calendar__day day"></div>
                <div class="calendar__day day"></div>
                <div class="calendar__day day"></div>
                <div type="" class="btn btn-outline-warning" data-toggle="modal" data-target=" #debutmois" id="flag">
                  <div class="calendar__day day">1<div class="calendar_day_infos_down">Aujourd'hui</div></div>
                </div>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target=" #vendredi">
                  <div class="calendar__day day">2<div class="calendar_day_infos">Plannification</div></div>
                </button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=" #samedi">
                  <div class="calendar__day day">3<div class="calendar_day_infos">Dépensez</div></div>
                </button>
                <button type="button" class="btn" style="background-color: rgb(128,0,128);" data-toggle="modal" data-target=" #dimanche">
                  <div class="calendar__day day">4<div class="calendar_day_infos"></div></div>
                </button>
            </div>
            <div class="calendar__week">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=" #lundi">
                  <div class="calendar__day day">5<div class="calendar_day_infos">Dépensez</div></div>
                </button>
                <button type="button" class="btn" style="background-color: rgb(200,200,0);" data-toggle="modal" data-target=" #mardi">
                  <div class="calendar__day day">6<div class="calendar_day_infos"></div></div>
                </button>
                <button type="button" class="btn" style="background-color: rgb(45,152,96);" data-toggle="modal" data-target=" #mercredi">
                  <div class="calendar__day day">7<div class="calendar_day_infos"></div></div>
                </button>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=" #jeudi">
                  <div class="calendar__day day">8<div class="calendar_day_infos">Aujourd'hui</div></div>
                </button>
                 <button type="button" class="btn btn-info" data-toggle="modal" data-target=" #vendredi">
                  <div class="calendar__day day">9<div class="calendar_day_infos">Plannification</div></div>
                </button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=" #samedi">
                  <div class="calendar__day day">10<div class="calendar_day_infos">Dépensez</div></div>
                </button>
                <button type="button" class="btn" style="background-color: rgb(128,0,128);" data-toggle="modal" data-target=" #dimanche">
                  <div class="calendar__day day">11<div class="calendar_day_infos"></div></div>
                </button>
            </div>
            <div class="calendar__week">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=" #lundi">
                  <div class="calendar__day day">12<div class="calendar_day_infos">Dépensez</div></div>
                </button>
                <button type="button" class="btn" style="background-color: rgb(200,200,0);" data-toggle="modal" data-target=" #mardi">
                  <div class="calendar__day day">13<div class="calendar_day_infos"></div></div>
                </button>
                 <button type="button" class="btn" style="background-color: rgb(45,152,96);" data-toggle="modal" data-target=" #mercredi">
                  <div class="calendar__day day">14<div class="calendar_day_infos"></div></div>
                </button>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=" #jeudi">
                  <div class="calendar__day day">15<div class="calendar_day_infos">Aujourd'hui</div></div>
                </button>
                 <button type="button" class="btn btn-info" data-toggle="modal" data-target=" #vendredi">
                  <div class="calendar__day day">16<div class="calendar_day_infos">Plannification</div></div>
                </button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=" #samedi">
                  <div class="calendar__day day">17<div class="calendar_day_infos">Dépensez</div></div>
                </button>
                <button type="button" class="btn" style="background-color: rgb(128,0,128);" data-toggle="modal" data-target=" #dimanche">
                  <div class="calendar__day day">18<div class="calendar_day_infos"></div></div>
                </button>
            </div>
            <div class="calendar__week">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=" #lundi">
                  <div class="calendar__day day">19<div class="calendar_day_infos">Dépensez</div></div>
                </button>
                <button type="button" class="btn" style="background-color: rgb(200,200,0);" data-toggle="modal" data-target=" #mardi">
                  <div class="calendar__day day">20<div class="calendar_day_infos"></div></div>
                </button>
                 <button type="button" class="btn" style="background-color: rgb(45,152,96);" data-toggle="modal" data-target=" #mercredi">
                  <div class="calendar__day day">21<div class="calendar_day_infos"></div></div>
                </button>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=" #jeudi">
                  <div class="calendar__day day">22<div class="calendar_day_infos">Aujourd'hui</div></div>
                </button>
                 <button type="button" class="btn btn-info" data-toggle="modal" data-target=" #vendredi">
                  <div class="calendar__day day">23<div class="calendar_day_infos">Plannification</div></div>
                </button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=" #samedi">
                  <div class="calendar__day day">24<div class="calendar_day_infos">Dépensez</div></div>
                </button>
                <div class="calendar__day day">25</div>
            </div>
            <div class="calendar__week">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=" #lundi">
                  <div class="calendar__day day">26<div class="calendar_day_infos">Dépensez</div></div>
                </button>
                <button type="button" class="btn" style="background-color: rgb(235,235,0);" data-toggle="modal" data-target=" #le27">
                  <div class="calendar__day day">27<div class="calendar_day_infos"></div></div>
                </button>
                 <button type="button" class="btn" style="background-color: rgb(45,152,96);" data-toggle="modal" data-target=" #mercredi">
                  <div class="calendar__day day">28<div class="calendar_day_infos"></div></div>
                </button>
                <button type="button" class="btn" style="background-color: rgb(255,146,26);" data-toggle="modal" data-target=" #le29">
                  <div class="calendar__day day">29<div class="calendar_day_infos"></div></div>
                </button>
                <div class="calendar__day day">30</div>
                <div class="calendar__day day"></div>
                <div class="calendar__day day"></div>
            </div>
        </div>
    </main>
    <!--<sidebar>
      <div class="logo">logo</div>
      <div class="avatar">
        <div class="avatar__img">
          <img src="https://picsum.photos/70" alt="avatar">
        </div>
        <div class="avatar__name">John Smith</div>
      </div>
      <nav class="menu">
        <a class="menu__item" href="#">
          <i class="menu__icon fa fa-home"></i>
          <span class="menu__text">overview</span>
        </a>
        <a class="menu__item" href="#">
          <i class="menu__icon fa fa-envelope"></i>
          <span class="menu__text">messages</span>
        </a>
        <a class="menu__item" href="#">
          <i class="menu__icon fa fa-list"></i>
          <span class="menu__text">workout</span>
        </a>
        <a class="menu__item menu__item--active" href="#">
          <i class="menu__icon fa fa-calendar"></i>
          <span class="menu__text">calendar</span>
        </a>
        <a class="menu__item" href="#">
          <i class="menu__icon fa fa-bar-chart"></i>
          <span class="menu__text">goals</span>
        </a>
        <a class="menu__item" href="#">
          <i class="menu__icon fa fa-trophy"></i>
          <span class="menu__text">achivements</span>
        </a>
        <a class="menu__item" href="#">
          <i class="menu__icon fa fa-sliders"></i>
          <span class="menu__text">measurements</span>
        </a>
      </nav>
      <div class="copyright">copyright &copy; 2018</div>
    </sidebar>-->
</div>



<!--  Modal lundi-->
        <div class="modal fade top" id="lundi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            data-backdrop="false">
            <div class="modal-dialog modal-full-height modal-top modal-notify modal-danger" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Achetez</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fa fa-hourglass-start fa-4x mb-3 animated rotateIn"></i>
                            <div class="text-center text-warning" id="timer">00:30</div>
                        </div>
                      
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <form method="POST" action="{{ route('Lundi') }}">
                            {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary-modal">Acheter matière première chez Hanouty
                            <i class="fa fa-shopping-cart ml-1"></i>
                        </button>
                        </form>
                        <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Retour</a>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
<!-- Modal -->


<!--  Modal mardi-->
        <div class="modal fade top" id="mardi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            data-backdrop="false">
            <div class="modal-dialog modal-full-height modal-top modal-notify" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header" style="background-color: rgb(200,200,0);">
                        <p class="heading lead">Fabriquez</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fa fa-hourglass-start fa-4x mb-3 animated rotateIn"></i>
                            <div class="text-center text-warning" id="timer">00:30</div>
                        </div>
                      
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center" >
                        <form method="POST" action="{{ route('Mardi') }}">
                            {{ csrf_field() }}
                        <button type="submit" style="background-color: rgb(200,200,0);" class="btn btn-primary-modal" >Fabriquez les chapeaux
                            <i class="fa fa-gears ml-1"></i>
                        </button>
                        </form>
                        <a type="button" class="btn btn-outline-warning-modal waves-effect" data-dismiss="modal">Retour</a>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
<!-- Modal -->


<!-- modal mercredi -->
    <div class="modal fade top" id="mercredi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        data-backdrop="false">
        <div class="modal-dialog modal-full-height modal-top modal-notify" role="document">
            <!--Content-->
            <div class="modal-content">

                <form id="contactForm" name="sentMessage" novalidate method="POST" action="{{ route('Mercredi') }}">
                    {{ csrf_field() }}
                <!--Header-->
                <div class="modal-header" style="background-color: rgb(45,152,96);" >
                    <p class="heading lead">Vendez chapeaux</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <!--Body-->
                        <div class="text-center">
                            <i class="fa fa-hourglass-start fa-4x mb-3 animated rotateIn"></i>
                            <div class="text-center text-warning" id="timer">00:30</div>
                        </div>
                        
                                  
                                  <div class="row">

                                       <div class="col-md-4"></div>
                                       <div class="col-md-4">

                                          <div class="card border-success mb-3">
                                            <div class="card-header text-center">Fabricants</div>
                                            <div class="card-body text-success">

                                            <div class="form-group" id="mode_vente">
                                                <select name="mode" class="selectpicker form-control">
                                                  <option id="v_q" value="v_q">vente à la boutique Qobaati</option>
                                                  <option id="v_n" value="v_n">vente Négociation avec les détaillants</option>
                                                  <option id="v_c" value="v_c">Vente à crédit</option>
                                                </select>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div id="output">
                                                
                                            </div>

                                          </div>    
                                        </div>
                                          
                                       </div>

                                    
                            
                                  </div>
                               
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                     <button id="sendMessageButton"  style="background-color: rgb(45,152,96);" class="btn btn-primary-modal" type="submit">Sauvegarder planification
                     <i class="fa fa-pencil-square-o ml-1"></i>
                     </button>
                    <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Retour</a>
                </div>
               </form>
            </div>
            <!--/.Content-->
        </div>
    </div>
<!-- modal mercredi-->


<!--  Modal debut mois-->
        <div class="modal fade top" id="debutmois" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            data-backdrop="false">
            <div class="modal-dialog modal-full-height modal-top modal-notify modal-warning" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Collectez</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fa fa-hourglass-start fa-4x mb-3 animated rotateIn"></i>
                            <div class="text-center text-warning" id="timer">00:30</div>
                        </div>
                      
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <form method="POST" action="{{ route('Jeudi') }}">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary-modal">Empruntez 200 de la banque
                                <i class="fa fa-bank ml-1"></i>
                            </button>
                        </form>
                        <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Retour</a>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
<!-- Modal -->


<!--  Modal debut mois-->
        <div class="modal fade top" id="le29" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            data-backdrop="false">
            <div class="modal-dialog modal-full-height modal-top modal-notify modal-warning" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Collectez</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fa fa-hourglass-start fa-4x mb-3 animated rotateIn"></i>
                            <div class="text-center text-warning" id="timer">00:30</div>
                        </div>
                      
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <a type="button" class="btn btn-primary-modal">Remboursez la banque 250 pièces
                            <i class="fa fa-bank ml-1"></i>
                        </a>
                        <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Retour</a>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
<!-- Modal -->


<!--  Modal jeudi-->
        <div class="modal fade top" id="jeudi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            data-backdrop="false">
            <div class="modal-dialog modal-full-height modal-top modal-notify modal-warning" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Collectez</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fa fa-hourglass-start fa-4x mb-3 animated rotateIn"></i>
                            <div class="text-center text-warning" id="timer">00:30</div>

                            <div class="row" id="next_cards">
                                

                                <div class="sandwish col-md-4"></div>


                                <div class="col-md-4" id="card_det">

                                    <div class="card border-info mb-3">
                                      <div class="card-header text-center">Détaillant</div>
                                     <div class="card-body text-info">
                                         <p>Vendre x chapeaux a y pieces </p>
                                    </div>
                                  </div>
                                    
                                 </div>

                                 <div class="sandwish  col-md-4"></div>

                            </div>
                        </div>
                      
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <div id="next_btn"></div>
                        <a id='v_det' type="button" class="btn btn-primary-modal">vendre chapeaux
                            <i class="fa fa-bank ml-1"></i>
                        </a>
                        <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Retour</a>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
<!-- Modal -->




<!--  Modal le 27-->
        <div class="modal fade top" id="le27" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            data-backdrop="false">
            <div class="modal-dialog modal-full-height modal-top modal-notify modal-warning" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Collectez</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fa fa-hourglass-start fa-4x mb-3 animated rotateIn"></i>
                            <div class="text-center text-warning" id="timer">00:30</div>

                            <div class="row" >
                                

                                <div class=" col-md-4"></div>


                                <div class="col-md-4">

                                    <div class="card border-info mb-3">
                                      <div class="card-header text-center">Tout les équipes</div>
                                     <div class="card-body text-info">
                                         <p>Payer loyer 100 pièces</p>
                                    </div>
                                  </div>
                                    
                                 </div>

                                 <div class="  col-md-4"></div>

                            </div>
                        </div>
                      
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <div id="next_btn"></div>
                        <a id='v_det' type="button" class="btn btn-primary-modal">Payez loyez
                            <i class="fa fa-bank ml-1"></i>
                        </a>
                        <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Retour</a>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
<!-- Modal -->

<!-- modal vendredi -->
    <div class="modal fade top" id="vendredi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        data-backdrop="false">
        <div class="modal-dialog modal-full-height modal-top modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content">

                <form id="contactForm" name="sentMessage" novalidate method="POST" action="{{ route('Vendredi') }}">
                {{ csrf_field() }}
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Planifiez</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <!--Body-->
                        <div class="text-center">
                            <i class="fa fa-hourglass-start fa-4x mb-3 animated rotateIn"></i>
                            <div class="text-center text-warning" id="timer">00:30</div>
                        </div>
                                  <div class="row">

                                      <div class="col-md-4">

                                          <div class="card border-info mb-3" >
                                            <div class="card-header text-center">Fabricant 1</div>
                                            <div class="card-body text-info">
                                              <div class="form-group">
                                                    <input class="form-control" id="name" name="achatsF1" type="text" value="Matière première" required data-validation-required-message="Veuillez saisir MP." disabled>
                                                <p class="help-block text-danger"></p>
                                              </div>
                                              <div class="form-row">
                                                  <div class="col">
                                                    <input class="form-control" id="email" name="depensesF1" type="text" placeholder="Dépense *" value="40" required data-validation-required-message="Veuillez saisir la Dépense">
                                                    <p class="help-block text-danger"></p>
                                                  </div>
                                                  <div class="col">
                                                    <input class="form-control" id="phone" name="economiesF1" type="text" placeholder="Economie *" required data-validation-required-message="Veuillez saisir l'économie">
                                                    <p class="help-block text-danger"></p>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                <input class="form-control" id="phone" name="prixF1" type="text" placeholder="Prix négociation *" required data-validation-required-message="Please enter your phone number.">
                                                <p class="help-block text-danger"></p>
                                              </div>
                                          </div>
                                        </div>
                                          
                                       </div>

                                        <div class="col-md-4">

                                          <div class="card border-info mb-3">
                                            <div class="card-header text-center">Fabricant 2</div>
                                           <div class="card-body text-info">
                                              <div class="form-group">
                                                <input class="form-control" id="name" name="achatsF2" type="text" value="Matière première" required data-validation-required-message="Please enter your name." disabled>
                                                <p class="help-block text-danger"></p>
                                              </div>
                                               <div class="form-row">
                                                  <div class="col">
                                                    <input class="form-control" id="email" name="depensesF2" type="text" placeholder="Dépense *" value="40" required data-validation-required-message="Veuillez saisir la Dépense">
                                                    <p class="help-block text-danger"></p>
                                                  </div>
                                                  <div class="col">
                                                    <input class="form-control" id="phone" name="economiesF2" type="text" placeholder="Economie *" required data-validation-required-message="Veuillez saisir l'économie">
                                                    <p class="help-block text-danger"></p>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                <input class="form-control" id="phone" name="prixF2" type="text" placeholder="Prix négociation *" required data-validation-required-message="Please enter your phone number.">
                                                <p class="help-block text-danger"></p>
                                              </div>
                                          </div>
                                        </div>
                                          
                                       </div>


                                       <div class="col-md-4">

                                          <div class="card border-info mb-3">
                                            <div class="card-header text-center">Détaillant</div>
                                            <div class="card-body text-info">
                                            <div class="form-row">
                                                <div class="col">
                                                <input class="form-control" id="name" name="nbF1" type="text" placeholder="Achat chez Détaillant 1*" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block text-danger"></p>
                                              </div>
                                              <div class="col">
                                                <input class="form-control" id="email" name="nbF2" type="text" placeholder="Achat chez Détaillant 2*" required data-validation-required-message="Please enter your email address.">
                                                <p class="help-block text-danger"></p>
                                              </div>
                                            </div>
                                              
                                              <div class="form-row">
                                              <div class="col">
                                                    <input class="form-control" id="phone" name="depensesD" type="text" placeholder="Dépense *" required data-validation-required-message="Please enter your phone number.">
                                                    <p class="help-block text-danger"></p>
                                                  </div>
                                                  <div class="col">
                                                    <input class="form-control" id="phone" name="economiesD" type="text" placeholder="Economie *" required data-validation-required-message="Please enter your phone number.">
                                                    <p class="help-block text-danger"></p>
                                                  </div>
                                              </div>
                                              <div class="form-row">
                                                <div class="col">
                                                    <input class="form-control" id="phone" name="prixD" type="text" placeholder="prix vente *" required data-validation-required-message="Please enter your phone number.">
                                                    <p class="help-block text-danger"></p>
                                                  </div>
                                                    <div class="col">
                                                    <input class="form-control" id="phone" name="nbD" type="text" placeholder="nombre a vendre*" required data-validation-required-message="Please enter your phone number.">
                                                    <p class="help-block text-danger"></p>
                                                  </div>
                                              </div>

                                          </div>    
                                        </div>
                                          
                                       </div>

                                    
                            
                                  </div>
                               
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                     <button id="sendMessageButton" class="btn btn-primary-modal" type="submit">Sauvegarder planification
                     <i class="fa fa-pencil-square-o ml-1"></i>
                     </button>
                    <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Retour</a>
                </div>
               </form>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- modal vendredi -->


<!--  Modal samedi-->
        <div class="modal fade top" id="samedi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            data-backdrop="false">
            <div class="modal-dialog modal-full-height modal-top modal-notify modal-success" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Dépensez</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fa fa-hourglass-start fa-4x mb-3 animated rotateIn"></i>
                        </div>
                        <div class="text-center text-warning" id="timer">00:30</div>
                      
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <form method="POST" action="{{ route('Samedi') }}">
                            {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary-modal">Retrirez salaire des employés
                            <i class="fa fa-money ml-1"></i>
                        </button>
                        </form>
                        <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Retour</a>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
<!-- Modal -->


<!--  Modal Dimanche -->
        <div class="modal fade top" id="dimanche" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            data-backdrop="false">
            <div class="modal-dialog modal-full-height modal-top modal-notify " role="document">
                <!--Content-->
                <div class="modal-content">
                    <form id="contactForm" name="sentMessage" novalidate>
                    <!--Header-->
                    <div class="modal-header" style="background-color: rgb(128,0,128);">
                        <p class="heading lead">Economisez</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fa fa-hourglass-start fa-4x mb-3 animated rotateIn"></i>
                        </div>
                        <div class="text-center text-warning" id="timer">00:30</div>

                        
                      


                      <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                              <div class="form-group">
                                                <input class="form-control" id="name" type="text" placeholder="Prix a économisez" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block text-danger"></p>
                                              </div>
                                              
                                        </div>
                                          

                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <a type="button" style="background-color: rgb(128,0,128);" class="btn btn-primary-modal">Epargnez à la banque
                            <i class="fa fa-bank ml-1"></i>
                        </a>
                        <a type="button" class="btn btn-secondary btn-outline-secondary-modal waves-effect" data-dismiss="modal">Retour</a>
                    </div>
                    </div>
                    </form>
                </div>
                <!--/.Content-->
            </div>
        </div>
<!-- Modal -->






  <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!-- TImer -->
    <script>
    // Set the date we're counting down to
    var countDownDate = new Date().getTime()+30000;

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById("timer").innerHTML = "00" + ":" + seconds;

      // If the count down is finished, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>



    <script type="text/javascript">
        
        $(function () {
            //  Cache reference to select elements
            var $select = $("select"), 
            //  Cache reference to output elements
                $output = $("#output");
            //  bind `click` and `change` events to the select element
            $select.bind( "change click", function ( event ) {
              //  and pass the event object as the only argument
              var selectedValue = $("option:selected", $select ).val(),
                  v_q = '<div class="form-group"><input class="form-control" id="name" name="nbQ1" type="text" placeholder="Nombre chapeaux chez Fabricant 1" required data-validation-required-message=Please enter your name."><input class="form-control" id="name" name="nbQ2" type="text" placeholder="Nombre chapeaux chez Fabricant 2" required data-validation-required-message=Please enter your name."><p class="help-block text-danger"></p></div>';
                  v_c ='<div class="form-group"><input class="form-control" id="name" name="nbC1" type="text" placeholder="Nombre chapeaux chez Fabricant 1" required data-validation-required-message=Please enter your name."><input class="form-control" id="name" name="nbC2" type="text" placeholder="Nombre chapeaux chez Fabricant 2" required data-validation-required-message=Please enter your name."><p class="help-block text-danger"></p><button id="de1" name="de1" type="button" class="btn btn-outline-primary">Lancez dé 1</button><span class="help-block text-info" id="valde1"></span><button id="de2" name="de2" type="button" class="btn btn-outline-primary">Lancez dé 2</button><span class="help-block text-info" id="valde2"></span></div>';
              //  Send the returned data to the ouput element
              if(selectedValue == 'v_q')
                $output.html( v_q );
              else if(selectedValue == 'v_n')
                $output.html( '' );
              else if(selectedValue == 'v_c'){
                $output.html( v_c );
                var $de1 = $('#de1');
                var $valde1 = $('#valde1');
                $de1.bind( "click", function ( event ) {
                        var valde1 = parseInt(Math.random()*(5))+1;
                        $valde1.html(valde1);
                });
                var $de2 = $('#de2');
                var $valde2 = $('#valde2');
                $de2.bind( "click", function ( event ) {
                        var valde2 = parseInt(Math.random()*(5))+1;
                        $valde2.html(valde2);
                });
            }
            });

            
          });  
    </script>

    <script type="text/javascript">
         var $select = $("#v_det");
          $select.bind( "click", function ( event ) {
                        //$(this).remove().fadeout();
                       $(this).remove();
                       $('#card_det').remove();
                       $('sandwish').remove();
                         
                        var next_cards='<div class="col-md-2"></div><div class="col-md-4"><div class="card border-info mb-3" ><div class="card-header text-center">Fabricant 1</div><div class="card-body text-info"><p>Encaissez (ici val) pièces</p> </div></div></div><div class="col-md-4"><div class="card border-info mb-3"><div class="card-header text-center">Fabricant 2</div><div class="card-body text-info"><p>Encaissez (ici val) pièces</p></div></div></div>';
                        var next_btn = '<a type="button" class="btn btn-primary-modal">Encaissement d\'argents<i class="fa fa-bank ml-1"></i></a>';

                        $('#next_cards').html(next_cards);
                        $('#next_btn').html(next_btn);
             });

    </script>
</body>
</html>