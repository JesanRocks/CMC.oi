@extends('layouts.blog')
@section('titulo'," ¿Quienes somos?")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="accordion" id="accordionExample">
              <div class="card m-5">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0 text-center">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Mision
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body text-justify">
                    Cumpliar la funcion legislativa con el objetivos de dictar el ordenamiento juridico municipal para un mejor funcionamiento de la gestion publica local y la participacion del cuidadano. Asi como tambien ejercer el control politico sobre los organos ejecutivos del poder publico municipal.
                  </div>
                </div>
              </div>
              <div class="card m-5">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0 text-center">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Visión
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body text-justify">
                    Dictar el ordenamiento juridico municipal bajo los principios constitucionales y conforme al modelo de democracia participativa y de corresponsabilidad social con la finalidad de impulsar el crecimiento y desarrollo sustentable del Municipio de acuerdo con el plan municipal de desarrollo y las politicas de desarrollo nacional, estatal y municipal.
                  </div>
                </div>
              </div>
              <div class="card m-5">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0 text-center">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Objetivos
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body text-justify">
                    <p class="lead">
                        <ol>
                            <li class="m-3">Garantizar el cumplimiento de las leyes y ordenanzas establecidas.</li>
                            <li class="m-3">Aprobar el presupuesto de gastos que soporte su plan legislativo anual, tomando en cuenta las limitaciones financieras del Municipio</li>
                            <li class="m-3">Promover los mecanismos que legalmente le esten conferidos y que contribuyan a garantizar en forma eficiente, sufuciente y oportuna la participacion cuidadana en el proceso de formacion ejecucion, control y evaluacion de las gestion publica municipal</li>
                            <li class="m-3">Incrementar y propiciar el grado de compromiso del concejo municipal con el colectivo, a los fines de satisfacer las expectativas y necesidades de la comunidad</li>
                        </ol>
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
