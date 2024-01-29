  <!--------------------------------------------programas------------------------------------->
  <div class="fases-genes hide" id="fases-genes">
      <div class="container">
          <div class="row" style="min-height: 800px">

              <div class="col-md-12 fases">
                  <div class="program-title">
                      <div class="title-in row row-eq-height">
                          <div class="col-lg-2 col-md-2 col-sm-12">
                              <a style="padding:0 10px" href="#" onclick="backToHome(event)">
                                  <i class="fa fa-angle-left"></i>
                                  <img src="dna/img/2.jpg" class="img-fluid img-focus" width="128px" height="128px">
                              </a>
                          </div>
                          <div class='col-lg-2 col-md-2 col-sm-12'>
                              <h4 class="font-upper">Programa</h4>
                              <div id="exito" style="display:none">
                                Sus datos han sido recibidos con éxito.
                            </div>
                            <div id="fracaso" style="display:none">
                                Se ha producido un error durante el envío de datos.
                            </div>
                          </div>
                          <div class='col-lg-8 col-md-8 col-sm-12'>
                              <p class="text-top">
                                  Estructura tu recolocación siguiendo las 3 fases de nuestro programa de Outplacement:
                                  <strong>Preparación</strong>
                                  para revisar tu perfil (CV) e alternativas dentro del mercado laboral, <strong>Estrategia</strong>
                                  para darte a conocer el mercado, y la <strong>Ejecución</strong>
                                  de tu estrategia. </p>
                          </div>
                      </div>
                  </div>

                  <div class="box-fases cor1 start">
                      <div class="box-fase">
                          <div class="titulo-fases">
                              <i class="fas fa-arrow-left"></i>FASE 1
                          </div>
                                    <?php

                                        for ($i=0; $i <=strlen($fase1) ; $i++) { 
                                            $suma=$suma+$fase1[$i];
                                        }
                                        $porcentaje=round(($suma*100)/strlen($fase1));
                                        
                                    ?>

                          <div class="progress-circle">
                              <span class="progress-concluded">avance</span>
                              <div  class="c100 p<?php echo $porcentaje?> small cor1" data-checkeds="<?php echo $suma?>" data-total="26">
                                  <span>
                                      <?php
                                        echo $porcentaje."%";
                                        ?>

                                  </span>
                                  <div class="slice">
                                      <div class="bar"></div>
                                      <div class="fill"></div>
                                  </div>
                              </div>
                          </div>
                          <i class="fal fa-user-friends icone-fase"></i>
                          <p class="tit-fase">PREPARACIÓN</p>
                          <p class="txt-fase">Antes de salir al mercado es importante estar bien preparado. Para eso, vale la pena
                              no ser ansioso y trabajar en una revisión exhaustiva tanto de tu perfil profesional como del mercado
                              objetivo</p>
                      </div>
                      <div class="tasklist-fases" role="tablist" id="checklist-fase1">
                          <div class="task-check fase1task1">
                              <div class="task-icon">
                                  <i class="fas fa-user cor1"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Bienvenida</a>
                              <i class="fa fa-plus plus cor1"></i>
                          </div>
                          <div class="task-check fase1task2">
                              <div class="task-icon">
                                  <i class="fa fa-briefcase cor1"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Mercado laboral</a>
                              <i class="fa fa-plus plus cor1"></i>
                          </div>
                          <div class="task-check fase1task3">
                              <div class="task-icon">
                                  <i class="fas fa-user-plus cor1"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Tu perfil profesional</a>
                              <i class="fa fa-plus plus cor1"></i>
                          </div>
                          <div class="task-check fase1task4">
                              <div class="task-icon">
                                  <i class="fas fa-file cor1"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Construcción de CV</a>
                              <i class="fa fa-plus plus cor1"></i>
                          </div>
                          <div class="task-check fase1task5">
                              <div class="task-icon">
                                  <i class="fas fa-book cor1"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Tu historia profesional</a>
                              <i class="fa fa-plus plus cor1"></i>
                          </div>
                      </div>
                  </div>
                  <div class="box-fases cor2 start">
                      <div class="box-fase">
                          <div class="titulo-fases">
                              <i class="fas fa-arrow-left"></i>FASE 2 </div>
                          <div class="progress-circle">
                          <?php

                            for ($e=0; $e<=strlen($fase2) ; $e++) { 
                                $suma2=$suma2+$fase2[$e];
                            }
                            $porcentaje2=round(($suma2*100)/strlen($fase2));

                            ?>

                              <span class="progress-concluded">avance</span>
                              <div class="c100 p<?php echo $porcentaje2?> small cor2" data-checkeds="<?php echo $suma2?>" data-total="25">
                                  <span>
                                    <?php
                                        echo $porcentaje2."%";
                                    ?>
                                  </span>
                                  <div class="slice">
                                      <div class="bar"></div>
                                      <div class="fill"></div>
                                  </div>
                              </div>
                          </div>
                          <i class="far fa-file-alt icone-fase"></i>
                          <p class="tit-fase">ESTRATEGIA</p>
                          <p class="txt-fase">Una vez que ya mapeaste el mercado y trabajaste en la revisión y adaptación de tu
                              perfil es hora de definir la mejor estrategia para dar a conocerte en el mercado y con eso poder
                              conquistar la vacante que buscas.</p>
                      </div>
                      <div class="tasklist-fases" role="tablist" id="checklist-fase2">
                          <div class="task-check fase2task1">
                              <div class="task-icon">
                                  <i class="fa fa-calculator cor2"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Plan de Marketing Personal</a>
                              <i class="fa fa-plus plus cor2"></i>
                          </div>
                          <div class="task-check fase2task2">
                              <div class="task-icon">
                                  <i class="fa fa-glasses cor2"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Técnicas de Entrevista</a>
                              <i class="fa fa-plus plus cor2"></i>
                          </div>
                          <div class="task-check fase2task3">
                              <div class="task-icon">
                                  <i class="fas fa-globe cor2"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Prospección y redes</a>
                              <i class="fa fa-plus plus cor2"></i>
                          </div>
                          <div class="task-check fase2task4">
                              <div class="task-icon">
                                  <i class="fal fa-sms cor2"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Prácticas de Entrevista</a>
                              <i class="fa fa-plus plus cor2"></i>
                          </div>
                          <div class="task-check fase2task5">
                              <div class="task-icon">
                                  <i class="fal fa-chart-pie-alt cor2"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Valor de Mercado</a>
                              <i class="fa fa-plus plus cor2"></i>
                          </div>
                      </div>
                  </div>
                  <div class="box-fases cor3 start">
                      <div class="box-fase">
                          <div class="titulo-fases">
                              <i class="fas fa-arrow-left"></i>FASE 3 </div>
                          <div class="progress-circle">
                          <?php

                                for ($a=0; $a <=strlen($fase3) ; $a++) { 
                                    $suma3=$suma3+$fase3[$a];
                                }
                                $porcentaje3=round(($suma3*100)/strlen($fase3));

                                ?>
                              <span class="progress-concluded">avance</span>
                              <div  class="c100 p<?php echo $porcentaje3?> small cor3" data-checkeds="<?php echo $suma3?>" data-total="20">
                                  <span>
                                    <?php
                                        echo $porcentaje3."%";
                                    ?>
                                  </span>
                                  <div class="slice">
                                      <div class="bar"></div>
                                      <div class="fill"></div>
                                  </div>
                              </div>
                          </div>
                          <i class="far fa-lightbulb icone-fase"></i>
                          <p class="tit-fase">EJECUCIÓN</p>
                          <p class="txt-fase">Una buena vacante no se encuentra de un día al otro. Es producto de un trabajo
                              constante e inteligente. Ninguna estrategia es exitosa si no cuenta con una buena ejecución. Para
                              garantizar una ejecución exitosa cuentas con:</p>
                      </div>
                      <div class="tasklist-fases" role="tablist" id="checklist-fase3">
                          <div class="task-check fase3task1">
                              <div class="task-icon">
                                  <i class="fal fa-books cor3"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Agenda Óptima</a>
                              <i class="fa fa-plus plus cor3"></i>
                          </div>
                          <div class="task-check fase3task2">
                              <div class="task-icon">
                                  <i class="fa fa-lightbulb cor3"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Gestión Proactiva</a>
                              <i class="fa fa-plus plus cor3"></i>
                          </div>
                          <div class="task-check fase3task3">
                              <div class="task-icon">
                                  <i class="fal fa-thunderstorm cor3"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Auto-evaluación</a>
                              <i class="fa fa-plus plus cor3"></i>
                          </div>
                          <div class="task-check fase3task4">
                              <div class="task-icon">
                                  <i class="fal fa-check-circle cor3"></i>
                              </div>
                              <a href="#" class='tasks-individual'>Conseguí empleo</a>
                              <i class="fa fa-plus plus cor3"></i>
                          </div>
                      </div>
                  </div>

                  <div id='fase1task1' class='fases-highlight cor1'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Bienvenida</div>
                          <div class="num-tasks">1/5</div>
                      </div>

                      <div class="can-show-highlights ">
                          <p class="txt-fase">Bienvenido a IBjobcoach, workplace digital que te enseña a conseguir el empleo ideal en
                              menos tiempo. Para optimizar tu tiempo y esfuerzo hemos dividido tu proceso en 3 fases (Preparación,
                              Estrategia, Ejecución) dividido en distintas tareas por cada Fase. Asegúrate de revisar cada una de las
                              tareas para aumentar tus posibilidades de reinserción y poder avanzar en tu proceso. En caso de dudas
                              sobre la herramienta puedes escribir a nuestro chatbot ubicado en la parte inferior derecha de la
                              pantalla.</p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>

                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1  <?php if($fase1[0]==="1") echo "clicked"?>" >
                                      <i class="fas fa-check check"></i> 
                                      <a href="https://www.youtube.com/watch?v=IqnHLsrjy9s" data-type="other" data-area="video" data-id="2155" target="_blank" name="fase1_1" >
                                          <i class="fal fa-film"></i>
                                          <p>Introducción a IBjobcoach</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2  middle-item <?php if($fase1[1]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="miArchivos/ficha_de_incorporacion_opm_2018.xlsx" target="_blank" data-area="outplacement" data-id="2245" name="fase1_2" id="botonenviar" >
                                          <i class="fal fa-folder"></i>
                                          <p>Ficha de Incorporación - IBjobcoach OPM Perú</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-3 <?php if($fase1[2]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.youtube.com/watch?v=lOK8SJF-Fls&t=15s" data-type="other" data-area="video" data-id="2182" target="_blank" name="fase1_3" >
                                          <i class="fal fa-film"></i>
                                          <p>Estructura de la Plataforma IBjobcoach</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-4 <?php if($fase1[3]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://medium.com/the-post-grad-survival-guide/12-lessons-i-learned-after-quitting-my-decent-job-24099b32369" target="_blank" data-area="library" data-id="1228" name="fase1_4">
                                          <i class="fal  fa-book"></i>
                                          <p>12 Lessons I Learned After Quitting My Decent Job !!!</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color1">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
                  <div id='fase1task2' class='fases-highlight cor1'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Mercado laboral</div>
                          <div class="num-tasks">2/5</div>
                      </div>
                      <div class="can-show-highlights ">
                          <p class="txt-fase">El proceso de búsqueda laboral es un proceso muy ineficiente. Es necesario realizar
                              muchas acciones de contacto para concretar algunas entrevistas laborales. Por esto, es importante que
                              sepas que muchas de las vacantes del mercado nunca se publican y están exclusivamente en manos de
                              Headhunters. Conoce cómo es la realidad del mercado para que puedas recolocarte lo más rápido posible.
                          </p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>

                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1 <?php if($fase1[4]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.elmundo.es/tecnologia/2015/08/08/55c5d2d746163f4a138b456e.html" target="_blank" data-area="library" data-id="590" name="fase1_5">
                                          <i class="fas fa-book"></i>
                                          <p>El 80% de las ofertas no se hacen públicas</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2  middle-item <?php if($fase1[5]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.ciudadano2cero.com/busqueda-empleo-linkedin/" target="_blank" data-area="library" data-id="50" name="fase1_6">
                                          <i class="fas  fa-book"></i>
                                          <p>7 Acciones eficaces de búsqueda de empleo con LinkedIn que quizás desconocías</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-3 <?php if($fase1[6]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.appvizer.es/revista/recursos-humanos/reclutamiento/reclutamiento-de-personal" target="_blank" data-area="library" data-id="440" name="fase1_7">
                                          <i class="fas fa-book"></i>
                                          <p>Reclutamiento de personal: ¿cómo elegir el mejor candidato para tu empresa?</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-4 <?php if($fase1[7]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://gestion.pe/economia/management-empleo/son-perfiles-laborales-demandados-actualidad-peru-empleabilidad-oferta-laboral-nnda-nnlt-270700-noticia/" target="_blank" data-area="library" data-id="1327" name="fase1_8">
                                          <i class="fas fa-book"></i>
                                          <p>¿Cuáles son los perfiles laborales más demandados en la actualidad?</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-5 middle-item <?php if($fase1[8]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="http://www.rrhhdigital.com/noticia/124332/Los-empleados-tendran-que-reinventarse-entre-10-y-15-veces-en-su-vida-laboral" target="_blank" data-area="library" data-id="993" name="fase1_9">
                                          <i class="fas fa-book"></i>
                                          <p>Los empleados tendrán que reinventarse entre 10 y 15 veces en su vida laboral</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-6 <?php if($fase1[9]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://gestion.pe/economia/management-empleo/gerentes-ahora-demoran-el-doble-de-tiempo-para-reinsertarse-a-un-nuevo-trabajo-noticia/" target="_blank" data-area="library" data-id="447" name="fase1_10">
                                          <i class="fas fa-book"></i>
                                          <p>Gerentes ahora demoran el doble de tiempo para reinsertarse a un nuevo trabajo</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-7 <?php if($fase1[10]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.america-retail.com/peru/peru-los-numeros-detras-de-la-brecha-salarial-de-genero/" target="_blank" data-area="library" data-id="469" name="fase1_11">
                                          <i class="fas fa-book"></i>
                                          <p>Perú: Los números detrás de la brecha salarial de género</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-8 middle-item <?php if($fase1[11]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.nytimes.com/2010/09/12/jobs/12search.html" target="_blank" data-area="library" data-id="739" name="fase1_12">
                                          <i class="fas fa-book"></i>
                                          <p>Job Satisfaction vs. a Big Paycheck</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-9 <?php if($fase1[12]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.businessinsider.com/map-shows-most-job-will-be-lost-to-automation-2017-5" target="_blank" data-area="library" data-id="867" name="fase1_13">
                                          <i class="fas fa-book"></i>
                                          <p>This map shows where you're most likely to lose your job to robots</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-10 <?php if($fase1[13]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.inc.com/peter-economy/new-linkedin-study-of-more-than-2-million-members-.html?cid=search" target="_blank" data-area="library" data-id="1229" name="fase1_14">
                                          <i class="fas fa-book"></i>
                                          <p>New LinkedIn Study of More Than 2 Million Members Reveals Places With Highest Salaries</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-11 middle-item <?php if($fase1[14]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://blogs.evaluar.com/5-pasos-para-hacer-una-evaluacion-de-desempeno" target="_blank" data-area="library" data-id="43" name="fase1_15">
                                          <i class="fas fa-book"></i>
                                          <p>5 pasos para hacer una evaluación de desempeño</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color1">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
                  <div id='fase1task3' class='fases-highlight cor1'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Tu perfil profesional</div>
                          <div class="num-tasks">3/5</div>
                      </div>
                      <div class="can-show-highlights ">
                          <p class="txt-fase">Cada ser humano es único e irrepetible. Debes lograr mostrar tus habilidades y
                              oportunidades de mejora ante tu posible empleador. Para ello existen herramientas claves como LinkedIn o
                              Análisis de empleabilidad, que te ayudaran a conocer cómo está tu perfil en el mercado objetivo al que
                              postules.</p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>
                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1 <?php if($fase1[15]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="miArchivos/lineamientos_basicos_linkedin.pdf" target="_blank" data-area="outplacement" data-id="674" name="fase1-16">
                                          <i class="fas fa-folder"></i>
                                          <p>Lineamientos Básicos Linkedin</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2  middle-item <?php if($fase1[16]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://coachparaempresarias.com/10-errores-linkedin/" target="_blank" data-area="library" data-id="555" name="fase1-17">
                                          <i class="fas fa-book"></i>
                                          <p>10 Errores en Linkedin que te hacen parecer poco profesional </p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-3 <?php if($fase1[17]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.entrepreneur.com/article/266824" target="_blank" data-area="library" data-id="602" name="fase1-18">
                                          <i class="fas fa-book"></i>
                                          <p>8 tips para escribir un buen CV en inglés</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-4 <?php if($fase1[18]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://blog.hootsuite.com/linkedin-for-business/" target="_blank" data-area="library" data-id="930" name="fase1-19">
                                          <i class="fas fa-book"></i>
                                          <p>How to Use LinkedIn for Business: A Step-by-Step Guide for Marketers</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-5  middle-item <?php if($fase1[19]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.businessinsider.com/if-youre-only-using-linkedin-like-a-digital-resume-youre-doing-it-all-wrong-2017-4" target="_blank" data-area="library" data-id="884" name="fase1-20">
                                          <i class="fas fa-book"></i>
                                          <p>If you're using LinkedIn like a digital résumé, you're doing it all wrong</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-6 <?php if($fase1[20]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://aaeuro.com/7-ways-get-recruiters-notice-linkedin/" target="_blank" data-area="library" data-id="870" name="fase1-21">
                                          <i class="fas fa-book"></i>
                                          <p>7 Ways to Get Recruiters to Notice You on LinkedIn</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color1">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
                  <div id='fase1task4' class='fases-highlight cor1'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Construcción de CV</div>
                          <div class="num-tasks">4/5</div>
                      </div>
                      <div class="can-show-highlights ">
                          <p class="txt-fase">Tu Curriculum Vitae es una tarjeta de presentación como profesional, por ello es
                              importante que esté lo más ajustado posible a tu perfil, que demuestre tus fortalezas y que logre captar
                              la atención de los headhunters y reclutadores de manera clara y concisa.</p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>
                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1 <?php if($fase1[21]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="miArchivos/un_cv_deberia_tener.jpg" target="_blank" data-area="outplacement" data-id="335" name="fase1-22">
                                          <i class="fas fa-folder"></i>
                                          <p>Contenido del CV</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2 middle-item <?php if($fase1[22]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.youtube.com/watch?v=PVB3G25RCgc&feature=youtu.be" data-type="other" data-area="video" data-id="2177" target="_blank" name="fase1-23">
                                          <i class="fas fa-film"></i>
                                          <p>Cómo armar tu Curriculum Vitae (CV)</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color1">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
                  <div id='fase1task5' class='fases-highlight cor1'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Tu historia profesional</div>
                          <div class="num-tasks">5/5</div>
                      </div>
                      <div class="can-show-highlights ">
                          <p class="txt-fase">Tu historia profesional se debe construir con mirada optimista, resaltando tus logros
                              desde una perspectiva cuantitativa. En una entrevista laboral surgen frecuentemente consultas como
                              resumen breve de tu perfil, principales logros, oportunidades de mejora, y trayectoria profesional.
                              Constrúyela aquí.</p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>
                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1 <?php if($fase1[23]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="miArchivos/competencias_profesionales_1.docx" target="_blank" data-area="outplacement" data-id="2181" name="fase1-24">
                                          <i class="fas fa-folder"></i>
                                          <p>Competencias Profesionales</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2  middle-item <?php if($fase1[24]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>

                                      <a href="https://www.fool.com/careers/2020/03/10/how-to-deal-with-a-professional-setback-and-get-yo.aspx" target="_blank" data-area="library" data-id="62" name="fase1-25">
                                          <i class="fas fa-book"></i>
                                          <p>How to Deal with a Professional Setback and Get Your Career Back on Track</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-3 <?php if($fase1[25]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://youtu.be/cgNOhFeA6KY " data-type="other" data-area="video" data-id="2159" target="_blank" name="fase1-26">
                                          <i class="fas fa-film"></i>
                                          <p>Tips para tu perfil de Linkedin</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color1">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
                  <div id='fase2task1' class='fases-highlight cor2'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Plan de Marketing Personal</div>
                          <div class="num-tasks">1/5</div>
                      </div>
                      <div class="can-show-highlights ">
                          <p class="txt-fase">De la misma manera que se construye un plan de Marketing para el lanzamiento de un
                              nuevo producto para un público objetivo, construirás un plan de Marketing para tu posicionamiento en el
                              mercado laboral con tus virtudes y destrezas. Tu búsqueda debe estar bien dirigida a la industria y
                              empresas objetivo que se pueden beneficiar de manera óptima de tus características como profesional. Si
                              apuntas a todas las industrias es como apuntar a ninguna industria. Foco y gestión son claves en este
                              proceso.</p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>
                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1 <?php if($fase2[0]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="miArchivos/documento_match_de_mercado_5.docx" target="_blank" data-area="outplacement" data-id="2180" name="fase2-1">
                                          <i class="fas fa-folder"></i>
                                          <p>Match de Mercado</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2  middle-item <?php if($fase2[1]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.forbes.com/sites/travisbradberry/2015/08/31/11-secrets-of-irresistible-people/" target="_blank" data-area="library" data-id="625" name="fase2-2">
                                          <i class="fas fas fa-book"></i>
                                          <p>11 Secrets Of Irresistible People</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-3 <?php if($fase2[2]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.lifehack.org/290198/10-actions-you-can-take-boost-your-self-confidence" target="_blank" data-area="library" data-id="816" name="fase2-3">
                                          <i class="fas  fa-book"></i>
                                          <p>10 Actions You Can Take To Boost Your Self-Confidence</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-4 <?php if($fase2[3]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.bbc.com/mundo/noticias-41522290" target="_blank" data-area="library" data-id="150" name="fase2-4">
                                          <i class="fas fa-book"></i>
                                          <p>La gente cuando se siente poderosa se expande, se hace más grande</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-5  middle-item <?php if($fase2[4]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.themuse.com/advice/5-secrets-to-developing-a-better-relationship-with-your-boss" target="_blank" data-area="library" data-id="608" name="fase2-5">
                                          <i class="fas fa-book"></i>
                                          <p>5 Secrets to Developing a Better Relationship With Your Boss</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-6 <?php if($fase2[5]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.globalbankingandfinance.com/75-ways-to-make-your-communications-more-memorable/" target="_blank" data-area="library" data-id="434" name="fase2-6"> 
                                          <i class="fas fa-book"></i>
                                          <p>7.5 Ways to Make Your Communications More Memorable</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color2">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
                  <div id='fase2task2' class='fases-highlight cor2'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Técnicas de Entrevista</div>
                          <div class="num-tasks">2/5</div>
                      </div>

                      <div class="can-show-highlights ">
                          <p class="txt-fase">¡Ya es hora de empezar a practicar! En esta actividad prepararás tu discurso de valor
                              frente a empleadores. Mientras más practiques, más fluidez y tranquilidad sentirás en un proceso de
                              entrevistas laborales. Lograr una comunicación efectiva con tu entrevistador te ayudará a seguir
                              avanzando en los procesos.</p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>

                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1 <?php if($fase2[6]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="miArchivos/tipo_de_preguntas_en_una_entrevista_2.docx" target="_blank" data-area="outplacement" data-id="854" name="fase2-7">
                                          <i class="fas fa-folder"></i>
                                          <p>Tipo de Preguntas que se Realizan en una Entrevista</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2  middle-item <?php if($fase2[7]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="miArchivos/test_de_autoevalucion_de_entrevistas.docx" target="_blank" data-area="outplacement" data-id="2189" name="fase2-8">
                                          <i class="fas fa-folder"></i>
                                          <p>Autoevaluación de Técnicas de Entrevista</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-3 <?php if($fase2[8]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.universia.net/mx/actualidad/empleo/10-claves-saber-como-hacer-entrevista-exitosa-1151799.html" target="_blank" data-area="library" data-id="604" name="fase2-9">
                                          <i class="fas fa-book"></i>
                                          <p>Las 10 claves para saber cómo hacer una entrevista exitosa</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-4 <?php if($fase2[9]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.larepublica.co/alta-gerencia/cinco-claves-para-identificar-mentiras-en-entrevistas-de-trabajo-2540204" target="_blank" data-area="library" data-id="722" name="fase2-10">
                                          <i class="fas fa-book"></i>
                                          <p>Cinco claves para poder identificar mentirosos en una entrevista de trabajo</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-5 middle-item <?php if($fase2[10]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.hays.es/blog/insights/las-10-preguntas-clave-que-hay-que-hacer-en-una-entrevista" target="_blank" data-area="library" data-id="877" name="fase2-11">
                                          <i class="fas fa-book"></i>
                                          <p>Las 10 preguntas clave que hay que hacer en una entrevista</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-6 <?php if($fase2[11]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="miArchivos/tecnicas_de_entrevista.docx" target="_blank" data-area="outplacement" data-id="1401" name="fase2-12">
                                          <i class="fas fa-folder"></i>
                                          <p>Documento de Técnicas de Entrevista</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-7 <?php if($fase2[12]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>

                                      <a href="https://impressiveinterviewing.com/interview-likability-job-interview-tips/" target="_blank" data-area="library" data-id="1346" name="fase2-13">
                                          <i class="fas fa-book"></i>
                                          <p>Job Interview Tips: How To Be Likable During A Job Interview</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-8 middle-item <?php if($fase2[13]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.welcometothejungle.com/es/articles/hablar-despido-en-entrevista-trabajo" data-type="other" data-area="video" data-id="2156" target="_blank" name="fase2-14">
                                          <i class="fas fa-film"></i>
                                          <p>Cómo hablar de un despido en una entrevista de trabajo</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color2">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
                  <div id='fase2task3' class='fases-highlight cor2'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Prospección y redes</div>
                          <div class="num-tasks">3/5</div>
                      </div>

                      <div class="can-show-highlights ">
                          <p class="txt-fase">Manos a la obra! Ya haz avanzado mucho desde que iniciaste tu viaje. Ahora es
                              importante que puedas contactar a los Headhunters y reclutadores de tus empresas objetivo en tu
                              industria objetivo.</p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>
                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1 <?php if($fase2[14]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="miArchivos/gestion_prospeccion_y_redes_3.xlsx" target="_blank" data-area="outplacement" data-id="1328" name="fase2-15">
                                          <i class="fas fa-folder"></i>
                                          <p>Gestión Prospección y Redes</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2  middle-item <?php if($fase2[15]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.adecco.com.pe/2020/04/21/cuatro-claves-para-manejar-adecuadamente-una-red-de-contactos/" target="_blank" data-area="library" data-id="451" name="fase2-16">
                                          <i class="fas fa-book"></i>
                                          <p>Cuatro claves para manejar adecuadamente una red de contactos</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-3 <?php if($fase2[16]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="http://www.dnaoutplacement.com/noticias/10-preguntas-que-hacen-los-headhunter-y-lo-que-buscan-con-ellas" target="_blank" data-area="library" data-id="445" name="fase2-17">
                                          <i class="fas fa-book"></i>
                                          <p>10 preguntas que hacen los headhunter y lo que buscan con ellas, América Economía</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-4 <?php if($fase2[17]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://uy.emedemujer.com/relaciones/evita-que-tus-correos-electronicos-sean-ignorados/" target="_blank" data-area="library" data-id="588" name="fase2-18">
                                          <i class="fas fa-book"></i>
                                          <p>Evita que tus correos electrónicos sean ignorados</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color2">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
                  <div id='fase2task4' class='fases-highlight cor2'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Prácticas de Entrevista</div>
                          <div class="num-tasks">4/5</div>
                      </div>

                      <div class="can-show-highlights ">
                          <p class="txt-fase">Práctica, práctica, práctica. ¿Cómo está tu nivel de inglés? Sin importar el nivel es
                              importante que practiques las preguntas frecuentes que realizan los entrevistadores.</p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>

                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1 <?php if($fase2[18]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://essaeformacion.com/blog/noticias-essae/por-que-contratarte" target="_blank" data-area="library" data-id="198" name="fase2-19">
                                          <i class="fas fa-book"></i>
                                          <p>Cómo responder a la pregunta "¿por qué deberíamos contratarte?"</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2 middle-item <?php if($fase2[19]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.roberthalf.cl/blog/entrevistas/como-saber-si-una-entrevista-de-trabajo-fue-bien-7-senales-que-confirman-el-exito" target="_blank" data-area="library" data-id="1089" name="fase2-20">
                                          <i class="fas fa-book"></i>
                                          <p>Cómo saber si una entrevista de trabajo fue bien: 7 señales que confirman el éxito</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color2">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
                  <div id='fase2task5' class='fases-highlight cor2'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Valor de Mercado</div>
                          <div class="num-tasks">5/5</div>
                      </div>

                      <div class="can-show-highlights ">
                          <p class="txt-fase">¿Cuánto pedir en una entrevista laboral? Si sugieres un valor muy por encima del valor
                              de mercado corres el riesgo de ser descartado. Si pides un valor muy por debajo de mercado corres el
                              riesgo de no avanzar en el proceso. Por esto es importante que tengas claridad de tus pretensiones de
                              renta al momento de estar en una entrevista laboral.</p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>

                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1 <?php if($fase2[20]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.businessinsider.es/como-calcular-patrimonio-neto-ver-progreso-financiero-501739" target="_blank" data-area="library" data-id="726" name="fase2-21">
                                          <i class="fas fa-book"></i>
                                          <p>Cómo calcular tu patrimonio neto para poder seguir tu progreso financiero</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2 middle-item <?php if($fase2[21]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://orientacion.universia.edu.pe/infodetail/orientacion/consejos-tecnoversia/como-indicar-tus-pretensiones-salariales-en-una-entrevista-de-trabajo-4539.html#:~:text=Menciona%20tu%20sueldo%20actual%20o,sueldo%20base%2C%20bruto%20o%20l%C3%ADquido." target="_blank" data-area="library" data-id="1377" name="fase2-22">
                                          <i class="fas fa-book"></i>
                                          <p>Cómo indicar tus pretensiones salariales en una entrevista de trabajo</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-3 <?php if($fase2[22]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://blog.hotmart.com/es/encontrar-trabajo/" target="_blank" data-area="library" data-id="1231" name="fase2-23">
                                          <i class="fas fas fa-book"></i>
                                          <p>Encontrar trabajo: 10 tips para conseguir un buen empleo</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-4 <?php if($fase2[23]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.youtube.com/watch?v=zVjUqz8Q2iA" data-type="other" data-area="video" data-id="2163" target="_blank" name="fase2-24">
                                          <i class="fas fa-film"></i>
                                          <p>Pretensiones de Renta (Salario), Qué decir?</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-5 middle-item <?php if($fase2[24]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://gestion.pe/tendencias/management-empleo/consejos-negociar-salario-deseado-entrevista-62612-noticia/?ref=gesr" target="_blank" data-area="library" data-id="768" name="fase2-25">
                                          <i class="fas fa-book"></i>
                                          <p>Consejos para negociar el salario deseado en una entrevista de trabajo</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color2">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
                  <div id='fase3task1' class='fases-highlight cor3'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Agenda Óptima</div>
                          <div class="num-tasks">1/4</div>
                      </div>
                      <div class="can-show-highlights ">
                          <p class="txt-fase">El trabajo de búsqueda laboral requiere mucha disciplina y ejecución. Se necesita
                              contactar un volumen de 100 personas aproximadamente para conseguir una entrevista laboral. Debes ser
                              riguroso y seguir una agenda de trabajo estructurada para medir tu avance, la métrica más importante es
                              el número de reuniones/entrevistas realizadas por semana. Fuerza y mente positiva!</p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>
                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1 <?php if($fase3[0]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://dpersonas.com/2020/02/21/10-consejos-para-mejorar-tu-gestion-del-tiempo/" target="_blank" data-area="library" data-id="815" name="fase3-1">
                                          <i class="fas fa-book"></i>
                                          <p>10 consejos para mejorar tu gestión del tiempo</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2 middle-item <?php if($fase3[1]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="miArchivos/agenda_optima.pdf" target="_blank" data-area="outplacement" data-id="2185" name="fase3-2">
                                          <i class="fas fa-folder"></i>
                                          <p>Agenda Óptima</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-3 <?php if($fase3[2]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://blog.educalive.com/rutina-manana-para-ser-mas-productivo/" target="_blank" data-area="library" data-id="813" name="fase3-3">
                                          <i class="fas fa-book"></i>
                                          <p>Rutina de mañana para tener un día más productivo</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-4 <?php if($fase3[3]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>

                                      <a href="https://www.felicidadeneltrabajo.es/ideas-para-empleados/como-ser-productivo-rutinas-consejos-apps/" target="_blank" data-area="library" data-id="750" name="fase3-4">
                                          <i class="fas fa-book"></i>
                                          <p>¿Cómo ser productivo? 18 rutinas, 12 consejos y 10 apps</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color3">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
                  <div id='fase3task2' class='fases-highlight cor3'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Gestión Proactiva</div>
                          <div class="num-tasks">2/4</div>
                      </div>

                      <div class="can-show-highlights ">
                          <p class="txt-fase">Atrás quedó todo el trabajo teórico, en ésta tarea queda en tus manos la ejecución de
                              la agenda y el trabajo duro. Debes mantener actitud positiva, resiliencia y mucha energía para conseguir
                              el trabajo que quieres!. Vamos!</p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>

                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1 <?php if($fase3[4]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.psicologia-online.com/tecnicas-para-la-comunicacion-eficaz-3124.html#anchor_2" target="_blank" data-area="outplacement" data-id="27" name="fase3-5">
                                          <i class="far fa-folder"></i>
                                          <p>Técnicas de comunicación efectiva y eficaz: la escucha activa</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2 middle-item <?php if($fase3[5]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://lamenteesmaravillosa.com/10-cosas-que-las-personas-mentalmente-fuertes-hacen-todos-los-dias/" target="_blank" data-area="library" data-id="122" name="fase3-6">
                                          <i class="fas fa-book"></i>
                                          <p>10 cosas que las personas mentalmente fuertes hacen todos los días</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-3 <?php if($fase3[6]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://luiskafie.com/10-tips-le-ayudaran-potenciar-crecimiento-personal/" target="_blank" data-area="library" data-id="517" name="fase3-7">
                                          <i class="fas fa-book"></i>
                                          <p>10 tips que le ayudarán a potenciar su crecimiento personal</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-4 <?php if($fase3[7]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.sebascelis.com/responsabilidad-personal/ target="_blank" data-area="library" data-id="431" name="fase3-8">
                                          <i class="fas fa-book"></i>
                                          <p>Responsabilidad Personal… O Cómo Lograr Tus Sueños Más Fácilmente</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color3">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
                  <div id='fase3task3' class='fases-highlight cor3'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Auto-evaluación</div>
                          <div class="num-tasks">3/4</div>
                      </div>

                      <div class="can-show-highlights ">
                          <p class="txt-fase">Es posible que tu trabajo no esté rindiendo frutos. Debes revisar continuamente qué
                              está dando resultado y qué no. Es necesario actualizar tu perfil de Linkedin para agregar algo?,
                              modificar el CV para ajustar a un cargo específico?. Eres tú quien te conoce mejor, trabaja en tu
                              autoconocimiento.</p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>

                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1 <?php if($fase3[8]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>

                                      <a href="https://www.challengeconsulting.com.au/announcements/12-effective-ways-to-assess-candidates-soft-skills/" target="_blank" data-area="library" data-id="876" name="fase3-9">
                                          <i class="fas fa-book"></i>
                                          <p>12 Effective Ways to Assess Candidates’ Soft Skills</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2 middle-item <?php if($fase3[9]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.ceupe.com/blog/como-establecer-los-objetivos-comerciales.html" target="_blank" data-area="library" data-id="429" name="fase3-10">
                                          <i class="fas fa-book"></i>
                                          <p>¿CÓMO ESTABLECER LOS OBJETIVOS COMERCIALES?</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-3 <?php if($fase3[10]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://jamesclear.com/core-values" target="_blank" data-area="library" data-id="426" name="fase3-11">
                                          <i class="fas fa-book"></i>
                                          <p>Core Values List</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-4 <?php if($fase3[11]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>

                                      <a href="https://rumboeconomico.com/2020/06/12/5-habilidades-blandas-que-te-haran-brillar-en-una-entrevista-de-trabajo/" target="_blank" data-area="library" data-id="3391" name="fase3-12">
                                          <i class="fas fa-book"></i>
                                          <p>5 Habilidades blandas que te harán brillar en una entrevista de trabajo</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-5 middle-item <?php if($fase3[12]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.genesnextstep.com/online/download/outplacement/yVKd/competencias_profesionales_1.docx" target="_blank" data-area="library" data-id="3389" name="fase3-13">
                                          <i class="fas fa-book"></i>
                                          <p> 6 Competencias claves para el profesional del futuro</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-6 <?php if($fase3[13]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://blog.hubspot.com/marketing/transferable-skills" target="_blank" data-area="library" data-id="543" name="fase3-14">
                                          <i class="fas fa-book"></i>
                                          <p>How to Use Transferable Skills to Change Careers</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color3">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
                  <div id='fase3task4' class='fases-highlight cor3'>
                      <div class="highlight-header">
                          <div class="titulo-fases">Conseguí empleo</div>
                          <div class="num-tasks">4/4</div>
                      </div>

                      <div class="can-show-highlights ">
                          <p class="txt-fase">FELICITACIONES! Todo este esfuerzo al final rindió frutos!.Por favor haznos saber cómo
                              fue tu experiencia en la plataforma IBjobcoach!, Mucho éxito en tu nuevo desafío profesional!</p>
                          <p class="tit-fase">DESCARGA LOS CONTENIDOS + RELEVANTES</p>

                          <div class="all-highlights">
                              <div class="highlight-row">
                                  <div class="highlight-item item-1 <?php if($fase3[14]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>

                                      <a href="https://www.thebalancecareers.com/how-to-negotiate-accept-or-decline-a-job-offer-2061398" target="_blank" data-area="library" data-id="519" name="fase3-15">
                                          <i class="fas fa-book"></i>
                                          <p>How to Negotiate, Accept, or Decline a Job Offer</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-2 middle-item <?php if($fase3[15]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.orientacionparaelempleo.com/como-rechazar-una-oferta-de-trabajo-y-quedar-bien-con-la-empresa/" target="_blank" data-area="library" data-id="3392" name="fase3-16">
                                          <i class="fas fa-book"></i>
                                          <p>Cómo rechazar una oferta de empleo sin perder oportunidades</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-3 <?php if($fase3[16]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.forbes.com.mx/los-peligros-de-aceptar-una-contraoferta-laboral/" target="_blank" data-area="library" data-id="3393" name="fase3-17">
                                          <i class="fas fa-book"></i>
                                          <p>Los ‘peligros’ de aceptar una contraoferta laboral</p>
                                      </a>
                                  </div>
                              </div>
                              <div class="highlight-row">
                                  <div class="highlight-item item-4 <?php if($fase3[17]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>
                                      <a href="https://www.elviscaballero.com/blog/consejos-claves-aceptar-no-una-contraoferta-trabajo/" target="_blank" data-area="library" data-id="3394" name="fase3-18">
                                          <i class="fas fa-book"></i>
                                          <p>Consejos claves para aceptar o no una contraoferta de trabajo</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-5 middle-item <?php if($fase3[18]==="1") echo "clicked"?>">
                                      <i class="fas fa-check check"></i>

                                      <a href="https://www.investopedia.com/terms/c/counteroffer.asp" target="_blank" data-area="library" data-id="192" name="fase3-19">
                                          <i class="fas fa-book"></i>
                                          <p>Counteroffer</p>
                                      </a>
                                  </div>
                                  <div class="highlight-item item-6  item-found-job <?php if($fase3[18]==="1") echo "clicked"?>">
                                      <i></i>
                                      <a href="javascript: void(0);" data-toggle="modal" data-target="#modal-found-a-job" name="fase3-20">
                                          <i class="far fa-check-circle"></i>
                                          <p>Encontré Trabajo</p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class=" " href="#buttons">
                          <div class="see-more-button color3">CONOCE MÁS CONTENIDOS CLAVES</div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>