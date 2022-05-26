@extends('Template.Template')
@section('plantillaweb')
<h2>Registro de profesores</h2>
<form action="{{route('profesores.store')}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
            <h2>Registro de profesores</h2>


                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-4 col-sm-2">
                        <label for="">Nombres: </label>
                        <input type="text" name="nombres">
                      </div> <br><br>

                      <div class="col-lg-6 col-md-4 col-sm-2">
                        <label for="">Apellido: </label>
                        <input type="text" name="apellido">
                      </div> <br><br>

                      <div class="col-lg-6 col-md-4 col-sm-2">
                        <label for="">direccion: </label>
                        <input type="text" name="direccion">
                      </div>

                      <br><br>
                      <div class="col-lg-6 col-md-4 col-sm-2">
                        <label for="">correo: </label>
                        <input type="text" name="correo">
                      </div>

                      <br><br>
                      <div class="col-lg-6 col-md-4 col-sm-2">
                        <label for="">celular: </label>
                        <input type="number" name="celular">
                      </div>



                      <br>
                      <br><br>

                    </h3>
                    <br><br><select name="nivel_academico">
                        <option value="" disabled selected>---nivel academico---</option>
                        <option value="1">bachiller</option>
                        <option value="2">tecnico</option>
                        <option value="3">tecnologo</option>
                        <option value="4">profesional</option>
                        <option value="4">magister</option>
                        <option value="4">doctorado</option>
                    </select><br><br>

                    <input type="submit" name="btn_enviar" value="enviar">
                    <br><br>
                </form>
            </body>
        </center>
