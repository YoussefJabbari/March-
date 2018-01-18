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

<?php //Session::put('today',5); ?>
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


                @if(Session::get('today')==1)
                  <div type="" class='btn btn-outline-warning'  data-toggle="modal" data-target="#debutmois" >1
                    <img src="../images/flag.png" width="30px" height="30px">
                    <div class="calendar_day_infos">Aujourd'hui</div>
                  </div>
                @elseif(Session::get('today')>1)
                  <div type="" class='btn bg-light btn-outline-warning'  data-toggle="modal" data-target="">1
                    <img src="../images/flag.png" width="30px" height="30px">
                    <div class="calendar_day_infos">Emprunte 200 banque</div>
                  </div>
                @endif
                 


                @if(Session::get('today')==2)
                   <button type="button" class="btn btn-info" data-toggle="modal" data-target=" #vendredi">2
                      <div class="calendar_day_infos">Aujourd'hui</div>
                  </button>
                @elseif(Session::get('today')>2)
                   <button type="button" class="btn btn-info" data-toggle="modal" data-target=" #vendredi" disabled>
                        <table class="n-bordered">
                          <thead>
                            <tr>
                              <th class="text-primary">2</th>
                              <th >A</th>
                              <th >D</th>
                              <th >E</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>F1</th>
                              <td>MP</td>
                              <td>
                                @foreach($Fplans as $p)
                                    @if($p->semaine == 1)
                                        @foreach($fabricants as $f)
                                            @if($f->id == $p->fabricant_id AND $f->nom == "Equipe 1")
                                              {{ $p->depenses }}
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                              </td>
                              <td>
                                @foreach($Fplans as $p)
                                    @if($p->semaine == 1)
                                        @foreach($fabricants as $f)
                                            @if($f->id == $p->fabricant_id AND $f->nom == "Equipe 1")
                                              {{ $p->economies }}
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                              </td>
                            </tr>
                            <tr>
                              <th>F2</th>
                              <td>MP</td>
                              <td>
                                @foreach($Fplans as $p)
                                    @if($p->semaine == 1)
                                        @foreach($fabricants as $f)
                                            @if($f->id == $p->fabricant_id AND $f->nom == "Equipe 2")
                                              {{ $p->depenses }}
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                              </td>
                              <td>
                                @foreach($Fplans as $p)
                                    @if($p->semaine == 1)
                                        @foreach($fabricants as $f)
                                            @if($f->id == $p->fabricant_id AND $f->nom == "Equipe 2")
                                              {{ $p->economies }}
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                              </td>
                            </tr>
                            <tr>
                              <th>D</th>
                              <td>CH</td>
                              <td>
                                @foreach($Dplans as $p)
                                    @if($p->semaine == 1)
                                        @foreach($detaillants as $f)
                                            @if($f->id == $p->detaillant_id)
                                              {{ $p->depenses }}
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                              </td>
                              <td>
                                @foreach($Dplans as $p)
                                    @if($p->semaine == 1)
                                        @foreach($detaillants as $f)
                                            @if($f->id == $p->detaillant_id)
                                              {{ $p->economies }}
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      
                  </button>
                @else
                   <button type="button" class="btn btn-light" data-toggle="modal" data-target="" disabled>2
                      <div class="calendar_day_infos"></div>
                  </button>
                @endif

               
               @if(Session::get('today') == 3)
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=" #samedi">3<div class="calendar_day_infos">Aujourd'hui</div>
                  </button>
               @elseif(Session::get('today') > 3 )
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=" #samedi" disabled>3
                  </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #samedi" disabled>3
                  </button>
               @endif




              @if(Session::get('today') == 4)
                  <button type="button" class="btn" style="background-color: rgb(128,0,128);" data-toggle="modal" data-target=" #dimanche">4<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 4 )
                  <button type="button" class="btn" style="background-color: rgb(128,0,128);" data-toggle="modal" data-target=" #dimanche" disabled>4<div class="calendar_day_infos"></div>
                 </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #dimanche" disabled>4<div class="calendar_day_infos"></div>
                  </button>
               @endif
                
            </div>


              

              <div class="calendar__week">

                @if(Session::get('today') == 5)
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=" #lundi">5
                    <div class="calendar_day_infos">Aujourd'hui</div>
                  </button>
               @elseif(Session::get('today') > 5 )
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=" #lundi" disabled>5
                    <div class="calendar_day_infos">MT à 40 pièces @ Hanouti</div>
                  </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #lundi" disabled>5
                    <div class="calendar_day_infos"></div>
                  </button>
               @endif




                @if(Session::get('today') == 6)
                  <button type="button" class="btn" style="background-color: rgb(200,200,0);" data-toggle="modal" data-target=" #mardi">6<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 6 )
                  <button type="button" class="btn" style="background-color: rgb(200,200,0);" data-toggle="modal" data-target=" #mardi" disabled>6<div class="calendar_day_infos"></div>
                </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #mardi" disabled>6<div class="calendar_day_infos"></div>
                </button>
               @endif


                
                @if(Session::get('today') == 7)
                  <button type="button" class="btn" style="background-color: rgb(45,152,96);" data-toggle="modal" data-target=" #mercredi">7<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 7 )
                 <button type="button" class="btn" style="background-color: rgb(45,152,96);" data-toggle="modal" data-target=" #mercredi" disabled>7<div class="calendar_day_infos">
                    <?php $find = false; ?>
                    @foreach($achats as $achat)
                        @if($achat->semaine == 2)
                            @foreach($fabricants as $fab)
                                @if($fab->id == $achat->fabricant_id)
                                  {{ $achat->nombre . 'unités @' . $fab->nom }}
                                  <?php $find = true; ?>
                                  @break
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    @if(!$find)
                          @foreach($ventes as $vente)

                              @if($vente->semaine == 2)
                                    @foreach($fabricants as $fab)
                                        @if($fab->id == $vente->fabricant_id)
                                          @if($vente->client == 0)
                                              {{ 'Q:' . $vente->nombre .'unités @'. $fab->nom }}
                                          @else
                                              {{ 'C:' . $vente->nombre .'unités @'. $fab->nom }}
                                          @endif
                                          @break
                                        @endif
                                    @endforeach
                              @endif
                          @endforeach
                    @endif
                 </div>
                </button>
               @else
                 <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #mercredi" disabled>7<div class="calendar_day_infos"></div>
                </button>
               @endif


                


               @if(Session::get('today') == 8)
                 <button type="button" class="btn btn-warning" data-toggle="modal" data-target=" #jeudi">8<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 8 )
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target=" #jeudi" disabled>8<div class="calendar_day_infos"></div>
                </button>
               @else
                 <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #jeudi" disabled>8<div class="calendar_day_infos"></div>
                </button>
               @endif
                
               
                 



                 @if(Session::get('today')==9)
                   <button type="button" class="btn btn-info" data-toggle="modal" data-target=" #vendredi">9
                      <div class="calendar_day_infos">Aujourd'hui</div>
                  </button>
                @elseif(Session::get('today')>9)
                   <button type="button" class="btn btn-info" data-toggle="modal" data-target=" #vendredi" disabled>
                        <table class="n-bordered">
                          <thead>
                            <tr>
                              <th class="text-primary">9</th>
                              <th >A</th>
                              <th >D</th>
                              <th >E</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>F1</th>
                              <td>MP</td>
                              <td>40</td>
                              <td>20</td>
                            </tr>
                            <tr>
                              <th>F1</th>
                              <td>MP</td>
                              <td>40</td>
                              <td>50</td>
                            </tr>
                            <tr>
                              <th>D</th>
                              <td>CH</td>
                              <td>95</td>
                              <td>40</td>
                            </tr>
                          </tbody>
                        </table>
                      
                  </button>
                @else
                   <button type="button" class="btn btn-light" data-toggle="modal" data-target="" disabled>9
                      <div class="calendar_day_infos"></div>
                  </button>
                @endif




                @if(Session::get('today') == 10)
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=" #samedi">10<div class="calendar_day_infos">Aujourd'hui</div>
                  </button>
               @elseif(Session::get('today') > 10 )
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=" #samedi" disabled>10
                  </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #samedi" disabled>10
                  </button>
               @endif



                
              @if(Session::get('today') == 11)
                  <button type="button" class="btn" style="background-color: rgb(128,0,128);" data-toggle="modal" data-target=" #dimanche">11<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 11 )
                  <button type="button" class="btn" style="background-color: rgb(128,0,128);" data-toggle="modal" data-target=" #dimanche" disabled>11<div class="calendar_day_infos"></div>
                 </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #dimanche" disabled>11<div class="calendar_day_infos"></div>
                  </button>
               @endif



            </div>
            <div class="calendar__week">


                @if(Session::get('today') == 12)
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=" #lundi">12
                    <div class="calendar_day_infos">Aujourd'hui</div>
                  </button>
               @elseif(Session::get('today') > 12 )
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=" #lundi" disabled>12
                    <div class="calendar_day_infos">MT à 40 pièces @ Hanouti</div>
                  </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #lundi" disabled>12
                    <div class="calendar_day_infos"></div>
                  </button>
               @endif

                @if(Session::get('today') == 13)
                  <button type="button" class="btn" style="background-color: rgb(200,200,0);" data-toggle="modal" data-target=" #mardi">13<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 13 )
                  <button type="button" class="btn" style="background-color: rgb(200,200,0);" data-toggle="modal" data-target=" #mardi" disabled>13<div class="calendar_day_infos"></div>
                </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #mardi" disabled>13<div class="calendar_day_infos"></div>
                </button>
               @endif



                 @if(Session::get('today') == 14)
                  <button type="button" class="btn" style="background-color: rgb(45,152,96);" data-toggle="modal" data-target=" #mercredi">14<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 14 )
                 <button type="button" class="btn" style="background-color: rgb(45,152,96);" data-toggle="modal" data-target=" #mercredi" disabled>14<div class="calendar_day_infos">
                    <?php $find = false; ?>
                    @foreach($achats as $achat)
                        @if($achat->semaine == 3)
                            @foreach($fabricants as $fab)
                                @if($fab->id == $achat->fabricant_id)
                                  {{ $achat->nombre . 'unités @' . $fab->nom }}
                                  <?php $find = true; ?>
                                  @break
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    @if(!$find)
                          @foreach($ventes as $vente)
                              @if($vente->semaine == 3)
                                    @foreach($fabricants as $fab)
                                        @if($fab->id == $vente->fabricant_id)
                                          @if($vente->client == 0)
                                              {{ 'Q:' . $vente->nombre .'unités @'. $fab->nom }}
                                          @else
                                              {{ 'C:' . $vente->nombre .'unités @'. $fab->nom }}
                                          @endif
                                          @break
                                        @endif
                                    @endforeach
                              @endif
                          @endforeach
                    @endif
                 </div>
                </button>
               @else
                 <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #mercredi" disabled>14<div class="calendar_day_infos"></div>
                </button>
               @endif



                @if(Session::get('today') == 15)
                 <button type="button" class="btn btn-warning" data-toggle="modal" data-target=" #jeudi">15<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 15 )
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target=" #jeudi" disabled>15<div class="calendar_day_infos"></div>
                </button>
               @else
                 <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #jeudi" disabled>15<div class="calendar_day_infos"></div>
                </button>
               @endif
                 


                 @if(Session::get('today')==16)
                   <button type="button" class="btn btn-info" data-toggle="modal" data-target=" #vendredi">16
                      <div class="calendar_day_infos">Aujourd'hui</div>
                  </button>
                @elseif(Session::get('today')>16)
                   <button type="button" class="btn btn-info" data-toggle="modal" data-target=" #vendredi" disabled>
                        <table class="n-bordered">
                          <thead>
                            <tr>
                              <th class="text-primary">16</th>
                              <th >A</th>
                              <th >D</th>
                              <th >E</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>F1</th>
                              <td>MP</td>
                              <td>40</td>
                              <td>20</td>
                            </tr>
                            <tr>
                              <th>F1</th>
                              <td>MP</td>
                              <td>40</td>
                              <td>50</td>
                            </tr>
                            <tr>
                              <th>D</th>
                              <td>CH</td>
                              <td>95</td>
                              <td>40</td>
                            </tr>
                          </tbody>
                        </table>
                      
                  </button>
                @else
                   <button type="button" class="btn btn-light" data-toggle="modal" data-target="" disabled>16
                      <div class="calendar_day_infos"></div>
                  </button>
                @endif




                

                @if(Session::get('today') == 17)
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=" #samedi">17<div class="calendar_day_infos">Aujourd'hui</div>
                  </button>
               @elseif(Session::get('today') > 17 )
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=" #samedi" disabled>17
                  </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #samedi" disabled>17
                  </button>
               @endif




                
                @if(Session::get('today') == 18)
                  <button type="button" class="btn" style="background-color: rgb(128,0,128);" data-toggle="modal" data-target=" #dimanche">18<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 18)
                  <button type="button" class="btn" style="background-color: rgb(128,0,128);" data-toggle="modal" data-target=" #dimanche" disabled>18<div class="calendar_day_infos"></div>
                 </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #dimanche" disabled>18<div class="calendar_day_infos"></div>
                  </button>
               @endif


            </div>
            <div class="calendar__week">
                

                @if(Session::get('today') == 19)
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=" #lundi">19
                    <div class="calendar_day_infos">Aujourd'hui</div>
                  </button>
               @elseif(Session::get('today') > 19 )
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=" #lundi" disabled>19
                    <div class="calendar_day_infos">MT à 40 pièces @ Hanouti</div>
                  </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #lundi" disabled>19
                    <div class="calendar_day_infos"></div>
                  </button>
               @endif



                @if(Session::get('today') == 20)
                  <button type="button" class="btn" style="background-color: rgb(200,200,0);" data-toggle="modal" data-target=" #mardi">20<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 20 )
                  <button type="button" class="btn" style="background-color: rgb(200,200,0);" data-toggle="modal" data-target=" #mardi" disabled>20<div class="calendar_day_infos"></div>
                </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #mardi" disabled>20<div class="calendar_day_infos"></div>
                </button>
               @endif



                 

                 @if(Session::get('today') == 21)
                  <button type="button" class="btn" style="background-color: rgb(45,152,96);" data-toggle="modal" data-target=" #mercredi">21<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 21 )
                 <button type="button" class="btn" style="background-color: rgb(45,152,96);" data-toggle="modal" data-target=" #mercredi" disabled>21<div class="calendar_day_infos">
                    <?php $find = false; ?>
                    @foreach($achats as $achat)
                        @if($achat->semaine == 4)
                            @foreach($fabricants as $fab)
                                @if($fab->id == $achat->fabricant_id)
                                  {{ $achat->nombre . 'unités @' . $fab->nom }}
                                  <?php $find = true; ?>
                                  @break
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    @if(!$find)
                          @foreach($ventes as $vente)
                              @if($vente->semaine == 4)
                                    @foreach($fabricants as $fab)
                                        @if($fab->id == $vente->fabricant_id)
                                          @if($vente->client == 0)
                                              {{ 'Q:' . $vente->nombre .'unités @'. $fab->nom }}
                                          @else
                                              {{ 'C:' . $vente->nombre .'unités @'. $fab->nom }}
                                          @endif
                                          @break
                                        @endif
                                    @endforeach
                              @endif
                          @endforeach
                    @endif
                 </div>
                </button>
               @else
                 <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #mercredi" disabled>21<div class="calendar_day_infos"></div>
                </button>
               @endif





                @if(Session::get('today') == 22)
                 <button type="button" class="btn btn-warning" data-toggle="modal" data-target=" #jeudi">22<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 22 )
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target=" #jeudi" disabled>22<div class="calendar_day_infos"></div>
                </button>
               @else
                 <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #jeudi" disabled>22<div class="calendar_day_infos"></div>
                </button>
               @endif
                


                @if(Session::get('today')==23)
                   <button type="button" class="btn btn-info" data-toggle="modal" data-target=" #vendredi">23
                      <div class="calendar_day_infos">Aujourd'hui</div>
                  </button>
                @elseif(Session::get('today')>23)
                   <button type="button" class="btn btn-info" data-toggle="modal" data-target=" #vendredi" disabled>
                        <table class="n-bordered">
                          <thead>
                            <tr>
                              <th class="text-primary">23</th>
                              <th >A</th>
                              <th >D</th>
                              <th >E</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>F1</th>
                              <td>MP</td>
                              <td>40</td>
                              <td>20</td>
                            </tr>
                            <tr>
                              <th>F1</th>
                              <td>MP</td>
                              <td>40</td>
                              <td>50</td>
                            </tr>
                            <tr>
                              <th>D</th>
                              <td>CH</td>
                              <td>95</td>
                              <td>40</td>
                            </tr>
                          </tbody>
                        </table>
                      
                  </button>
                @else
                   <button type="button" class="btn btn-light" data-toggle="modal" data-target="" disabled>23
                      <div class="calendar_day_infos"></div>
                  </button>
                @endif



                @if(Session::get('today') == 24)
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=" #samedi">24<div class="calendar_day_infos">Aujourd'hui</div>
                  </button>
               @elseif(Session::get('today') > 24 )
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=" #samedi" disabled>24
                  </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #samedi" disabled>24
                  </button>
               @endif





               @if(Session::get('today') == 25)
                  <button type="button" class="btn" style="background-color: rgb(128,0,128);" data-toggle="modal" data-target=" #dimanche">25<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 25)
                  <button type="button" class="btn" style="background-color: rgb(128,0,128);" data-toggle="modal" data-target=" #dimanche" disabled>25<div class="calendar_day_infos"></div>
                 </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #dimanche" disabled>25<div class="calendar_day_infos"></div>
                  </button>
               @endif


                
            </div>
            <div class="calendar__week">
                

                @if(Session::get('today') == 26)
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=" #lundi">26
                    <div class="calendar_day_infos">Aujourd'hui</div>
                  </button>
               @elseif(Session::get('today') > 26 )
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=" #lundi" disabled>26
                    <div class="calendar_day_infos">MT à 40 pièces @ Hanouti</div>
                  </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #lundi" disabled>26
                    <div class="calendar_day_infos"></div>
                  </button>
               @endif




               @if(Session::get('today') == 27)
                  <button type="button" class="btn" style="background-color: rgb(235,235,0);" data-toggle="modal" data-target=" #le27">27<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 27)
                  <button type="button" class="btn" style="background-color: rgb(235,235,0);" data-toggle="modal" data-target=" #le27" disabled="">27<div class="calendar_day_infos">Loyer payé à 100 pièces</div>
                </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #le27" disabled="">27<div class="calendar_day_infos"></div>
                </button>
               @endif


                
                 @if(Session::get('today') == 28)
                  <button type="button" class="btn" style="background-color: rgb(45,152,96);" data-toggle="modal" data-target=" #mercredi">28<div class="calendar_day_infos">Aujourd'hui</div>
                </button>
               @elseif(Session::get('today') > 28 )
                 <button type="button" class="btn" style="background-color: rgb(45,152,96);" data-toggle="modal" data-target=" #mercredi" disabled>28<div class="calendar_day_infos">
                    <?php $find = false; ?>
                    @foreach($achats as $achat)
                        @if($achat->semaine == 5)
                            @foreach($fabricants as $fab)
                                @if($fab->id == $achat->fabricant_id)
                                  {{ $achat->nombre . 'unités @' . $fab->nom }}
                                  <?php $find = true; ?>
                                  @break
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    @if(!$find)
                          @foreach($ventes as $vente)
                              @if($vente->semaine == 5)
                                    @foreach($fabricants as $fab)
                                        @if($fab->id == $vente->fabricant_id)
                                          @if($vente->client == 0)
                                              {{ 'Q:' . $vente->nombre .'unités @'. $fab->nom }}
                                          @else
                                              {{ 'C:' . $vente->nombre .'unités @'. $fab->nom }}
                                          @endif
                                          @break
                                        @endif
                                    @endforeach
                              @endif
                          @endforeach
                    @endif
                 </div>
                </button>
               @else
                 <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #mercredi" disabled>28<div class="calendar_day_infos"></div>
                </button>
               @endif



               @if(Session::get('today') == 29)
                  <button type="button" class="btn" style="background-color: rgb(255,146,26);" data-toggle="modal" data-target=" #le29">29<div class="calendar_day_infos">Aujourd'hui</div>
                  </button>
               @elseif(Session::get('today') > 29 )
                  <button type="button" class="btn" style="background-color: rgb(255,146,26);" data-toggle="modal" data-target=" #le29" disabled>29<div class="calendar_day_infos">Banque remboursée 250 pièces</div>
                  </button>
               @else
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target=" #le29" disabled>29<div class="calendar_day_infos"></div>
                  </button>
               @endif






                    @if(Session::get('today') == 30)
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target=" #le30">30
                            <div class="calendar_day_infos">Aujourd'hui</div>
                        </button>
                    @elseif(Session::get('today') < 30)
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="" disabled>30
                            <div class="calendar_day_infos"></div>
                        </button>
                    @endif


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
                            <button type="button" class="btn btn-outline-danger  waves-effect" data-dismiss="modal">Retour</button>
                        </form>
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
                       
                        <button type="button" class="btn  waves-effect" style="border: 1px solid rgb(200,200,0); " data-dismiss="modal">Retour</button>
                         </form>
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
                    <p class="heading lead">Vente des chapeaux</p>

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
                     <button id="sendMessageButton"  style="background-color: rgb(45,152,96);" class="btn btn-primary-modal" type="submit">Vendre
                     <i class="fa fa-pencil-square-o ml-1"></i>
                     </button>
                    <button type="button" class="btn  waves-effect" style="border:1px solid rgb(45,152,96);" data-dismiss="modal">Retour</button>
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
                        
                        <button class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Retour</button>
                        </form>
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
                        <form method="POST" action="{{ route('Jeudi') }}">
                            {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary-modal">Remboursez la banque 250 pièces
                            <i class="fa fa-bank ml-1"></i>
                        </button>
                        <button class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Retour</button>
                        </form>
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
                                         <p>Vendre {{ Session::get('D.nb') }} chapeaux a {{ Session::get('D.prix') }} pieces </p>
                                    </div>
                                  </div>
                                    
                                 </div>

                                 <div class="sandwish  col-md-4"></div>

                            </div>
                        </div>
                      
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <form method="POST" action="{{ route('Jeudi') }}">
                            {{ csrf_field() }}
                            <div id="next_btn"></div>
                        <button id='v_det' type="button" class="btn btn-primary-modal">vendre chapeaux
                            <i class="fa fa-bank ml-1"></i>
                        </button>
                        <button type="button" class="btn btn-outline-warning waves-effect" data-dismiss="modal">Retour</button>
                        </form>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
<!-- Modal -->




<!--  Modal le 27-->
        <div class="modal fade top" id="le27" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            data-backdrop="false">
            <div class="modal-dialog modal-full-height modal-top modal-notify" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header" style="background-color: rgb(235,235,0);">
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
                        <form method="POST" action="{{ route('Mardi') }}">
                            {{ csrf_field() }}
                        <div id="next_btn"></div>
                        <button id='v_det' type="submit" style="background-color: rgb(235,235,0);" class="btn btn-primary-modal">Payez loyez
                            <i class="fa fa-bank ml-1"></i>
                        </button>
                        <button class="btn text-warning waves-effect" data-dismiss="modal">Retour</button>
                        </form>
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
                        
                        <button type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Retour</button>
                        </form>
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
                    <form id="contactForm" name="sentMessage" novalidate method="POST" action="{{ route('Dimanche') }}">
                        {{ csrf_field() }}
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

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <button type="submit" style="background-color: rgb(128,0,128);" class="btn btn-primary-modal">Epargnez à la banque
                            <i class="fa fa-bank ml-1"></i>
                        </button>
                        <a type="button" class="btn btn-secondary btn-outline-secondary-modal waves-effect" data-dismiss="modal">Retour</a>
                    </div>
                    </div>
                    </form>
                </div>
                <!--/.Content-->
            </div>
        </div>
<!-- Modal -->

<!--  Modal fin mois-->
<div class="modal fade top" id="le30" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
     data-backdrop="false">
    <div class="modal-dialog modal-full-height modal-top modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">

            <form id="contactForm" name="sentMessage" novalidate method="POST" action="{{ route('Vendredi') }}">
            {{ csrf_field() }}
            <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Fin du mois</p>

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
                  v_c ='<div class="form-group"><input class="form-control" id="name" name="nbC1" type="text" placeholder="Nombre chapeaux chez Fabricant 1" required data-validation-required-message=Please enter your name."><input class="form-control" id="name" name="nbC2" type="text" placeholder="Nombre chapeaux chez Fabricant 2" required data-validation-required-message=Please enter your name."><p class="help-block text-danger"></p><button id="de1" type="button" class="btn btn-outline-primary">Lancez dé 1</button><input type="hidden" id="ide1" name="de1"/><span class="help-block text-info" id="valde1"></span><button id="de2" name="de2" type="button" class="btn btn-outline-primary">Lancez dé 2</button><input type="hidden" id="ide2" name="de2"/><span class="help-block text-info" id="valde2"></span></div>';
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
                        $('#ide1').val(valde1);
                });
                var $de2 = $('#de2');
                var $valde2 = $('#valde2');
                $de2.bind( "click", function ( event ) {
                        var valde2 = parseInt(Math.random()*(5))+1;
                        $valde2.html(valde2);
                        $('#ide2').val(valde2);
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
                         

                        var next_cards='<div class="col-md-2"></div><div class="col-md-4"><div class="card border-info mb-3" ><div class="card-header text-center">Fabricant 1</div><div class="card-body text-info"><p>Encaissez {{ Session::get('credit.f1') }} pièces</p> </div></div></div><div class="col-md-4"><div class="card border-info mb-3"><div class="card-header text-center">Fabricant 2</div><div class="card-body text-info"><p>Encaissez {{ Session::get('credit.f2') }} pièces</p></div></div></div>';
                        var next_btn = '<button type="submit" class="btn btn-primary-modal">Encaissement d\'argents<i class="fa fa-bank ml-1"></i></button>';


                        $('#next_cards').html(next_cards);
                        $('#next_btn').html(next_btn);
             });

    </script>
</body>
</html>