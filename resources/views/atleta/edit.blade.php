@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1> Edit Atleta {{$atleta->firstName .' '. $atleta->lastName }} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class='btn btn-secondary' href="/atletas"> Regresar </a> 
        </div>
    </div>        
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif()
            <form action="/atletas/{{$atleta->CIAtleta}}" method="POST">
                @csrf
                @method('put')         

                <div class="form-group">
                    <label for="firstName "> Primer Nombre </label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Escribe el primer nombre" value="{{ old('firstName') }}">            
                </div>

                <div class="form-group">
                    <label for="secondName"> Segundo Nombre </label>
                    <input type="text" class="form-control" id="secondName" name="secondName" placeholder="Escribe el segundo nombre" value="{{ old('secondName') }}">               
                </div>

                <div class="form-group">
                    <label for="lastName"> Primer Apellido </label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Escribe el primer apellido" value="{{ old('lastName') }}">               
                </div>

                <div class="form-group">
                    <label for="secondLastName"> Segundo Apellido </label>
                    <input type="text" class="form-control" id="secondLastName" name="secondLastName" placeholder="Escribe el segundo apellido" value="{{ old('secondLastName') }}">               
                </div>

                <div class="form-group">
                    <label for="email"> E-mail </label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Escribe el e-mail" value="{{ old('email') }}">               
                </div>

                <div class="form-group">
                    <label for="phoneNumber"> Numero de telefono local </label>
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Escribe el numero de telefono" value="{{ old('phoneNumber') }}">               
                </div>

                <div class="form-group">
                    <label for="cellphone"> Numero de telefono </label>
                    <input type="text" class="form-control" id="cellphone" name="cellphone" placeholder="Escribe el numero de telefono" value="{{ old('cellphone') }}">               
                </div>

                <div class="form-group">
                    <label for="nickname"> Apodo deportivo </label>
                    <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Escribe el apodo" value="{{ old('nickname') }}">               
                </div>

                <div class="form-group">
                    <label for="country"> Pais </label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Escribe el pais" value="{{ old('country') }}">               
                </div>

                <div class="form-group">
                    <label for="birthDate"> Fecha de nacimiento </label>
                    <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="Ingrese fecha de nacimiento" value="{{ old('birthDate') }}">               
                </div>

                <div class="form-group">
                    <label for="birthPlace"> Lugar de nacimiento </label>
                    <input type="text" class="form-control" id="birthPlace" name="birthPlace" placeholder="Escribe el lugar de nacimiento" value="{{ old('birthPlace') }}">               
                </div>

                <div class="form-group">
                    <label for="city"> Ciudad </label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Escribe la ciudad" value="{{ old('city') }}">               
                </div>
            
                <div class="form-group">
                    <label for="bloodType"> Tipo de sangre </label>
                    <select name="bloodType" id="bloodType">
                        <optgroup label="Tipo">
                            <option value="O+" > O+ </option>
                            <option value="O-" > O- </option>
                            <option value="A+" > A+ </option>
                            <option value="A-" > A- </option>
                            <option value="B+" > B+ </option>
                            <option value="B-" > B- </option>
                            <option value="AB+"> AB+ </option>
                            <option value="AB-"> AB-</option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group">
                    <label for="height"> Altura(m) </label>
                    <input type="text" class="form-control" id="height" name="height" placeholder="Escribe la altura" value="{{ old('height') }}">               
                </div>

                <div class="form-group">
                    <label for="weight"> Peso(Kg) </label>
                    <input type="text" class="form-control" id="weight" name="weight" placeholder="Escribe el peso" value="{{ old('weight') }}">               
                </div>

                <div class="form-group">
                    <label for="foot"> Pie dominante </label>
                    <select name="foot" id="foot">
                        <optgroup label="Pie dominante">
                            <option value="der"> Derecho </option>
                            <option value="izq"> Izquierdo </option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group">
                    <label for="position"> Posicion </label>
                    <select name="position" id="position">
                        <optgroup label="Portero">
                            <option value="Portero"> Portero </option>
                        </optgroup>
                        <optgroup label="Defensa">
                            <option value="Defensa central"> Central </option>
                            <option value="Lateral derecho"> Lateral derecho </option>
                            <option value="Lateral izquierdo"> Lateral izquierdo </option>
                        </optgroup>
                        <optgroup label="Mediocampista">
                            <option value="Mediocampo defensivo"> Defensivo </option>
                            <option value="Mediocampo central"> Central </option>
                            <option value="Mediocampo ofensivo"> Ofensivo </option>
                        </optgroup>
                        <optgroup label="Delantero">
                            <option value="Delantero central"> Central </option>
                            <option value="Extremo derecho"> Extremo derecho</option>
                            <option value="Extremo izquierdo"> Extremo izquierdo </option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group">
                    <label for="previousClub"> Club anterior </label>
                    <input type="text" class="form-control" id="previousClub" name="previousClub" placeholder="Escribe el club anterior" value="{{ old('previousClub') }}">               
                </div>

                <div class="form-group">
                    <label for="highSchool"> Escuela </label>
                    <input type="text" class="form-control" id="highSchool" name="highSchool" placeholder="Escribe su escuela" value="{{ old('highSchool') }}">               
                </div>

                <div class="form-group">
                    <label for="footSize"> Talla de zapatos </label>
                    <select name="footSize" id="footSize">
                        <optgroup label="Talla">
                            <option value="36"> 36 </option>
                            <option value="37"> 37 </option>
                            <option value="38"> 38 </option>
                            <option value="39"> 39 </option>
                            <option value="40"> 40 </option>
                            <option value="41"> 41 </option>
                            <option value="42"> 42 </option>
                            <option value="43"> 43 </option>
                            <option value="44"> 44 </option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group">
                    <label for="shirtSize"> Talla de Camisa </label>
                    <select name="shirtSize" id="shirtSize">
                        <optgroup label="Talla">
                            <option value="10"> 10 </option>
                            <option value="12"> 12 </option>
                            <option value="14"> 14 </option>
                            <option value="16"> 16 </option>
                            <option value="S" >  S </option>
                            <option value="M" >  M </option>
                            <option value="L" >  L </option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group">
                    <label for="pantSize"> Talla de short </label>
                    <input type="text" class="form-control" id="pantSize" name="pantSize" placeholder="Escribe la talla del short" value="{{ old('pantSize') }}">               
                </div>

                <div class="form-group">
                    <label for="allergy"> Alergias </label>
                    <input type="text" class="form-control" id="allergy" name="allergy" placeholder="Escribe sus alergias" value="{{ old('allergy') }}">               
                </div>

                <div class="form-group">
                    <label for="injuries"> Lesiones </label>
                    <input type="text" class="form-control" id="injuries" name="injuries" placeholder="Escribe sus lesiones" value="{{ old('injuries') }}">               
                </div>

                <div class="form-group">
                    <label for="description"> Description </label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Escribe el peso" value="{{ old('description') }}">               
                </div>

                <button type="submit" class="btn btn-primary"> Actualizar </button>
            </form>
        </div>
    </div>        
@endsection