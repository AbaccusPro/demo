@extends('layouts.app')

@section('content')

<!-- TODOS LOS CONTENIDOS LLEVAN EL MISMO NOMBRE DE SECCION !-->

<!-- NO MOVEER NINGÚN DIV !-->
<div class="fixed-header horizontal-menu">  

  <div class="page-content-wrapper">
    <div class="content sm-gutter">            
     <div class="container-fluid">
     
             <div class="bar">
                    <div class="pull-right">
                      <a href="#" class="text-black padding-10 visible-xs-inline visible-sm-inline pull-right m-t-10 m-b-10 m-r-10 on" data-pages="horizontal-menu-toggle">
                        <i class=" pg-close_line"></i>
                      </a>
                    </div>                    
<!-- NO MOVEER NINGÚN DIV !-->

                     <div class="bar-inner">
                      <ul>
                        <!-- START BREADCRUMB -->
                        <ul class="breadcrumb">
                          <li><a href="{{ url('/home') }}">Inicio</a></li>
                          <li><a class="active">Glosario</a>
                          </li>
                        </ul>
                        <!-- END BREADCRUMB -->
                          <ul class="mega">
                          
                            <div class="container">
                              <div class="row">

                              </div> <!-- END DIV ROW -->
                            </div>
                          </ul>
                        </li>
                      </ul>
               
                </div> <!-- DIVS SUB-MENU -->
              </div> <!-- DIVS SUB-MENU -->

      <div class="page-content-wrapper ">

<!-- CHANGE 'content' HERE-->
             
          <!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg">
              <div class="inner">

                <div class="container-md-height m-b-20">
                  <div class="row row-md-height">
                    <div class="col-lg-5 col-md-height col-md-6 col-top">
                      <!-- START PANEL -->
                      <div class="panel panel-transparent">
                        <div class="panel-heading">
                          <div class="panel-title">Herramientas
                          </div>
                        </div>
                        <div class="panel-body">
                          <h3>Glosario</h3>
                          <p>En esta sección podrá encontrar los conceptos básicos relacionados a la Armonización Contable, que han sido definidos por el CONAC.</p>
                          <br>

                        </div>
                      </div>
                      <!-- END PANEL -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-md-height col-middle">
                      <!-- START PANEL -->

                      <!-- END PANEL -->
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END JUMBOTRON -->


          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <div class="row">

              <div class="col-md-10">
                <div class="sm-m-l-5 sm-m-r-5">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="1">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             <h3 class="text-complete">A</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="1">
                        <div class="panel-body">

                          <h5 class="semi-bold">Activos Diarios</h5>
                          <p>Dentro del no circulante se han mencionado los activos varios, que se refieren a las mismas clases de activos que se han mencionado en corto plazo, 
                          pero que su realización se hará en un plazo mayor a un año, por lo que los valores de referencia son los mismos mencionados anteriormente.</p>
                          
                          <h5 class="semi-bold">Aplicación de los Recursos</h5>
                          <p>Es la disminución del efectivo, provocada por el incremento de cualquier otro activo distinto al efectivo, la disminución de pasivos 
                          o por la disposición del patrimonio.</p>

                          <h5 class="semi-bold">Aportaciones Federales</h5>                          
                          <p>Recursos que corresponden a las entidades federativas y municipios que se derivan del Sistema Nacional de Coordinación Fiscal, de conformidad a lo 
                          establecido por el capítulo V de la Ley de Coordinación Fiscal.</p>
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="2">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h3 class="text-complete">B</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="2">
                        <div class="panel-body">

                          <h5 class="semi-bold">Balance del Sector Público Presupuestario</h5>
                          <p>Diferencia entre los ingresos totales (corrientes y de capital) de los entes públicos incluidos en la Ley de Ingresos con excepción de los financiamientos 
                          y los gastos totales (corrientes y de capital) de los entes públicos considerados en el Presupuesto de Egresos, con excepción de la amortización de la deuda.</p>
                          
                          <h5 class="semi-bold">Bienes y mercancías de consumo</h5>
                          <p>Estos bienes deben reconocerse inicialmente al monto pagado o por pagar por ellos en la fecha de la transacción, o a su valor razonable en el caso de que no sean 
                          producto de una transacción en efectivo o equivalentes de efectivo o a su valor de realización. En un momento posterior los valores de estos bienes deberán ser modificados 
                          sólo en el caso de que no se puedan realizar al precio previamente reconocido, o se pierda su utilidad, por lo que se deberá reconocer su deterioro hasta el valor que pueda 
                          ser realizable en el futuro o se puedan usar en las mismas condiciones de su adquisición.</p>
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="3">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h3 class="text-complete">C</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="3">
                        <div class="panel-body">

                          <h5 class="semi-bold">Catálogo de bienes</h5>
                          <p>Tiene por objeto establecer criterios uniformes y homogéneos para la identificación de bienes muebles (de consumo o instrumentales), definir su agrupamiento, clasificación, 
                          codificación y vinculación con el Clasificador por Objeto del Gasto.</p>
                          
                          <h5 class="semi-bold">Catálogo de cuentas</h5>
                          <p>Es el documento técnico integrado por la lista de cuentas, los instructivos de manejo de cuentas y las guías contabilizadoras.</p>

                          <h5 class="semi-bold">Centros de registro (entradas) del SICG</h5>
                          <p>Se entenderá a cada una de las áreas administrativas donde ocurren las transacciones económico/ financieras y, por lo tanto, desde donde se introducen datos al sistema en momentos o eventos previamente seleccionados de los procesos administrativos correspondientes. La introducción de datosa la Contabilidad Gubernamental, tal como lo señala la Ley de Contabilidad, debe generarse automáticamente y por única vez a partir de dichos procesos administrativos de los entes públicos.</p>
                          
                          <h5 class="semi-bold">Cifra nominal</h5>
                          <p>Es el monto de efectivo o equivalentes pagados o cobrados o, en su caso, por cobrar o por pagar. Normalmente esta cifra se encuentra representada en forma escrita en algún documento referido al elemento, o implícitamente en él como sucede con la moneda.</p>

                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="4">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h3 class="text-complete">D</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="4">
                        <div class="panel-body">

                          <h5 class="semi-bold">Devengo Contable</h5>
                          <p>Los registros contables de los entes públicos se llevarán con base acumulativa. El ingreso devengado, es el momento contable que se realiza cuando existe jurídicamente el derecho de cobro de impuestos, derechos, productos, aprovechamientos y otros ingresos por parte de los entes públicos. El gasto devengado, es el momento contable que refleja el reconocimiento de una obligación de pago a favor de terceros por la recepción de conformidad de bienes, servicios y obra pública contratados; así como de las obligaciones que derivan de tratados, leyes, decretos, resoluciones y sentencias definitivas.</p>
                          
                          <h5 class="semi-bold">Dualidad Económica</h5>
                          <p>El ente público debe reconocer en la contabilidad, la representación de las transacciones y algún otro evento que afecte su situación financiera, su composición por los recursos asignados para el logro de sus fines y por sus fuentes, conforme a los derechos y obligaciones.</p>

                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="5">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <h3 class="text-complete">E</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="5">
                        <div class="panel-body">

                          <h5 class="semi-bold">Entes Públicos</h5>
                          <p>Los poderes Ejecutivo, Legislativo y Judicial de la Federación y de las entidades federativas; los entes autónomos de la Federación y de las entidades federativas; los ayuntamientos de los municipios; los órganos político-administrativos de las demarcaciones territoriales del Distrito Federal; y las entidades de la administración pública paraestatal, ya sean federales, estatales o municipales.</p>
                          
                          <h5 class="semi-bold">Entidades Federativas</h5>
                          <p>Son los estados de la Federación y el Distrito Federal.</p>

                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="6">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <h3 class="text-complete">F</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="6">
                        <div class="panel-body">

                          <h5 class="semi-bold">Finalidad de Desarrollo Económico</h5>
                          <p>Comprende los programas, actividades y proyectos relacionados con la promoción del desarrollo económico y fomento a la producción y comercialización agropecuaria, agroindustrial, acuacultura, pesca, desarrollo hidroagrícola y fomento forestal, así como la producción y prestación de bienes y servicios públicos, en forma complementaria a los bienes y servicios que ofrecen los particulares.</p>
                          
                          <h5 class="semi-bold">Finalidad de Desarrollo Social</h5>
                          <p>Incluye los programas, actividades y proyectos relacionados con la prestación de servicios en beneficio de la población con el fin de favorecer el acceso a mejores niveles de bienestar, tales como: servicios educativos, recreación, cultura y otras manifestaciones sociales, salud, protección social, vivienda, servicios urbanos y rurales básicos, así como protección ambiental.</p>

                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="7">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <h3 class="text-complete">G</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="7">
                        <div class="panel-body">

                          <h5 class="semi-bold">Gasto Aprobado</h5>
                          <p>Es el que refleja las asignaciones presupuestarias anuales comprometidas en el Presupuesto de Egresos.</p>
                          
                          <h5 class="semi-bold">Gasto Comprometido</h5>
                          <p>El momento contable del gasto que refleja la aprobación por autoridad competente de un acto administrativo, u otro instrumento jurídico que formaliza una relación jurídica con terceros para la adquisición de bienes y servicios o ejecución de obras. En el caso de las obras a ejecutarse o de bienes y servicios a recibirse durante varios ejercicios, el compromiso será registrado por la parte que se ejecutará o recibirá, durante cada ejercicio.</p>

                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="8">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            <h3 class="text-complete">I</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="8">
                        <div class="panel-body">

                          <h5 class="semi-bold">Indicadores de Resultados</h5>
                          <p>Los indicadores, con sus respectivas metas, corresponden a un índice, medida, cociente o fórmula que permite establecer un parámetro de medición de lo que se pretende lograr, expresado en términos de cobertura, eficiencia, impacto económico, social, calidad y equidad. Miden la eficiencia de las actividades desempeñadas por las dependencias y entidades de la Administración Pública, la consistencia de los procesos, el impacto social y económico de la acción gubernamental, y los efectos de las mejores prácticas en la Administración Pública.</p>
                          
                          <h5 class="semi-bold">Información Financiera</h5>
                          <p>Es la información presupuestaria y contable expresada en unidades monetarias, sobre las transacciones que realiza un ente público y los eventos económicos identificables y cuantificables que lo afectan, la cual puede representarse por reportes, informes, estados y notas que expresan su situación financiera, los resultados de su operación y los cambios en su patrimonio.</p>

                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="9">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            <h3 class="text-complete">L</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="9">
                        <div class="panel-body">

                          <h5 class="semi-bold">Ley de Ingresos</h5>
                          <p>Tiene por finalidad registrar, a partir de la Ley y a través de los rubros que la componen las operaciones de ingresos del período.</p>
                          
                          <h5 class="semi-bold">Libro Diario</h5>
                          <p>Es aquel en el cual se anotan cronológicamente los hechos y las cifras esenciales asociadas con cada una de las operaciones que se efectúan en el ente público.</p>

                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="10">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            <h3 class="text-complete">M</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="10">
                        <div class="panel-body">

                          <h5 class="semi-bold">Matrices de Conversión</h5>
                          <p>Es la aplicación de la metodología para la integración de los elementos que dan origen a la vinculación e integración automática de los registros de las operaciones presupuestarias y contables. Al respecto, se ejemplifica como opera la matriz para cada una de las principales transacciones de origen presupuestario de ingresos y egresos. Como resultado de la aplicación de esta matriz es posible generar asientos, registros en los libros de contabilidad y movimientos en los estados financieros, en forma automática y en tiempo real.</p>
                          
                          <h5 class="semi-bold">Mínimas requeridas del sistema de contabilidad gubernamental simplificado básico (SCGSB)</h5>
                          <p>El Sistema de Contabilidad Gubernamental Simplificado Básico (SCGSB), establece la posibilidad de que los municipios con menos de veinticinco mil habitantes y con ingresos menores o iguales a $10’000,000.00, deberán llevar su contabilidad mediante un sistema de gestión, basado en el registro, elaboración y presentación de información.</p>

                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="11">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsed11" aria-expanded="false" aria-controls="collapsed11">
                            <h3 class="text-complete">N</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapsed11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="11">
                        <div class="panel-body">

                          <h5 class="semi-bold">Notas a los estados financieros</h5>
                          <p>Revelan información complementaria de los rubros y saldos presentados en los estados financieros siendo de utilidad para que los usuarios de la información financiera tomen decisiones con una base objetiva. Esto implica que éstas no sean en sí mismas un estado financiero, sino que formen parte integral de ellos, siendo obligatoria su presentación. Los elementos mínimos que deben mostrar son: las bases de preparación de los estados financieros, las principales políticas de carácter normativo contable, y la explicación de las variaciones más significativas o representativas.</p>

                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="12">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                            <h3 class="text-complete">O</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="12">
                        <div class="panel-body">

                          <h5 class="semi-bold">Obras Capitalizables</h5>
                          <p>Es un activo y que incremente su valor. En este caso, cuando se concluya la obra, se deberá transferir el saldo al activo no circulante que corresponda y el soporte documental del registro contable será el establecido por la autoridad competente (acta de entrega-recepción o el documento que acredite su conclusión).</p>
                          
                          <h5 class="semi-bold">Obras del Dominio Público</h5>
                          <p>La obra de dominio público es aquélla realizada por el ente público para la construcción de obra pública de uso común. En el caso de las obras del dominio público, al concluir la obra, se deberá transferir el saldo a los gastos del período en el caso que corresponda al presupuesto del mismo ejercicio, por lo que se refiere a erogaciones de presupuestos de años anteriores se deberá reconocer en el resultado de ejercicios anteriores para mostrar el resultado real de las operaciones del ente público a una fecha determinada, excepto por las consideradas como infraestructura.</p>

                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="13">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                            <h3 class="text-complete">P</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="13">
                        <div class="panel-body">

                          <h5 class="semi-bold">Participaciones, aportaciones, transferencias, asignaciones, subsidios y otras ayudas</h5>
                          <p>Comprende el importe de los ingresos de las Entidades Federativas y Municipios por concepto de participaciones, aportaciones, transferencias, asignaciones, subsidios y otras ayudas.</p>
                          
                          <h5 class="semi-bold">Partida</h5>
                          <p>Es el nivel de agregación más específico, se armonizará posteriormente y se define como: las expresiones concretas y detalladas de los bienes y servicios que se adquieren.</p>

                          <h5 class="semi-bold">Participaciones, aportaciones, transferencias, asignaciones, subsidios y otras ayudas</h5>
                          <p>Comprende el importe de los ingresos de las Entidades Federativas y Municipios por concepto de participaciones, aportaciones, transferencias, asignaciones, subsidios y otras ayudas.</p>
                          
                          <h5 class="semi-bold">Plan de cuentas</h5>
                          <p>El documento en el que se definirán los dos primeros agregados a los que deberán alinearse las listas de cuentas que formularán los entes públicos.</p>
                        
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="14">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
                            <h3 class="text-complete">R</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="14">
                        <div class="panel-body">
                          <h5 class="semi-bold">Registro único</h5>
                          <p>Se refiere a la captura única de las operaciones transaccionales de las Unidades Responsables a través de un flujo de trabajo automatizado que permita la generación de múltiples eventos administrativos, presupuestarios y contables relacionados con dicho registro.</p>                          
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="15">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" aria-controls="collapse15">
                            <h3 class="text-complete">S</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="15">
                        <div class="panel-body">

                          <h5 class="semi-bold">Servicios básicos</h5>
                          <p>Asignaciones destinadas a cubrir erogaciones por concepto de servicios básicos necesarios para el funcionamiento de los entes públicos. Comprende servicios tales como: postal, telegráfico, telefónico, energía eléctrica, agua, transmisión de datos, radiocomunicaciones y otros análogos.</p>
                          
                          <h5 class="semi-bold">Servicios personales</h5>
                          <p>Agrupa las remuneraciones del personal al servicio de los entes públicos, tales como: sueldos, salarios, dietas, honorarios asimilables al salario, prestaciones y gastos de seguridad social, obligaciones laborales y otras prestaciones derivadas de una relación laboral; pudiendo ser de carácter permanente o transitorio.</p>

                          <h5 class="semi-bold">Sistema de Contabilidad Gubernamental Simplificado Básico (SCGSB)</h5>
                          <p>Será aplicable para los municipios con menos de veinticinco mil habitantes y con ingresos menores o iguales a $10’000,000.00.</p>
                          
                          <h5 class="semi-bold">Sistema de Contabilidad Gubernamental Simplificado General (SCGSG)</h5>
                          <p>Será aplicable a los municipios con menos de veinticinco mil habitantes y con ingresos mayores a $10’000,000.00.</p>
                        
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="16">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false" aria-controls="collapse16">
                            <h3 class="text-complete">T</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="16">
                        <div class="panel-body">
                          <h5 class="semi-bold">Transferencias a entidades federativas y municipios</h5>
                          <p>Importe del gasto por las transferencias que no suponen la contraprestación de bienes o servicios, destinados a favor de las Entidades Federativas y los Municipios, con la finalidad de apoyarlos en sus funciones, no incluidas en las cuentas de participaciones y aportaciones, así como sus fideicomisos para que ejecuten las acciones que se le han encomendado.</p>                        
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="17">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="false" aria-controls="collapse17">
                            <h3 class="text-complete">V</h3>
                            </a>
                          </h4>
                      </div>
                      <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="17">
                        <div class="panel-body">

                          <h5 class="semi-bold">Valuación</h5>
                          <p> Todos los eventos que afecten económicamente al ente público deben ser cuantificados en términos monetarios y se registrarán al costo histórico o al valor económico más objetivo registrándose en moneda nacional.</p>
                          
                          <h5 class="semi-bold">Veracidad</h5>
                          <p>Comprende la inclusión de eventos realmente sucedidos, así como su medición, para garantizar su revelación en los informes y estados financieros.</p>

                          <h5 class="semi-bold">Verficabilidad</h5>
                          <p>La información financiera se generará con la rigurosidad que establecen las normas, procedimientos, métodos y sistemas de contabilidad, permitiendo su comprobación y validación en cualquier momento y facilitando la comprobación de los datos.</p>
                          
                          <h5 class="semi-bold">Vida útil de un activo</h5>
                          <p>Es el período durante el que se espera utilizar el activo por parte del ente público.</p>
                        
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div> <!-- END row -->


          </div> <!-- END panel-body -->


<!-- STOP CHANGING 'content' HERE-->

      </div>
      <!-- TERMINA page container -->

<!-- TERMINA CONTENIDO / LA SECCIÓN SE QUEDA ABIERTA PARA CERRAR footer-->

@endsection