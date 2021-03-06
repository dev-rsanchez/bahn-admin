@extends('layouts.app')

@section('content')

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="paciente-tab" data-toggle="tab" href="#paciente" role="tab"
            aria-controls="paciente" aria-selected="true">Paciente</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="antropometria-tab" data-toggle="tab" href="#antropometria" role="tab"
            aria-controls="antropometria" aria-selected="false">Antropometría</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="gasto-energetico-tab" data-toggle="tab" href="#gasto-energetico" role="button"
            aria-controls="gasto-energetico" aria-selected="false">Gasto Energético</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="tab" aria-haspopup="true"
            aria-expanded="false" aria-selected="false">Anamnesis Alimentaria</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" id="anamnesis-alimentaria-tab" data-toggle="tab" href="#anamnesis-alimentaria"
                role="tab" aria-controls="anamnesis-alimentaria" aria-selected="false">Anamnesis Alimentaria</a>
            <a class="dropdown-item" id="anamnesis-alimentaria-post-tab" data-toggle="tab"
                href="#anamnesis-alimentaria-post" role="tab" aria-controls="anamnesis-alimentaria-post"
                aria-selected="false">Anamnesis Alimentaria - Post 6 meses</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="tab" aria-haspopup="true"
            aria-expanded="false" aria-selected="false">Req. Nutricionales</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" id="req-nutricionales-1-tab" data-toggle="tab" href="#req-nutricionales-1"
                role="tab" aria-controls="req-nutricionales-1" aria-selected="false">1</a>
            <a class="dropdown-item" id="req-nutricionales-2-tab" data-toggle="tab" href="#req-nutricionales-2"
                role="tab" aria-controls="req-nutricionales-2" aria-selected="false">2</a>
            <a class="dropdown-item" id="req-nutricionales-3-tab" data-toggle="tab" href="#req-nutricionales-3"
                role="tab" aria-controls="req-nutricionales-3" aria-selected="false">3</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="seguimiento-tab" data-toggle="tab" href="#seguimiento" role="tab"
            aria-controls="seguimiento" aria-selected="false">Seguimiento</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="tab" aria-haspopup="true"
            aria-expanded="false" aria-selected="false">Despensa</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" id="ayudas-ergogenicas-tab" data-toggle="tab" href="#ayudas-ergogenicas" role="tab"
                aria-controls="ayudas-ergogenicas" aria-selected="false">Ayudas Ergogénicas Sintéticas</a>
            <a class="dropdown-item" id="alimentos-funcionales-tab" data-toggle="tab" href="#alimentos-funcionales"
                role="tab" aria-controls="alimentos-funcionales" aria-selected="false">Alimentos Funcionales</a>
        </div>
    </li>
</ul>
<br>

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="paciente" role="tabpanel" aria-labelledby="paciente-tab">
            <div class="row">
                <div class="col-sm-12">
                    <form action="/pacientes" method="POST" id="ingresoForm">
                        @csrf
                        <div class="card">
                            <h5 class="card-header">Datos personales</h5>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="fecha_eval" class="col-sm-2 col-form-label">Fecha de evaluación</label>
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                                        <input type="date" class="form-control" name="fecha_evaluacion"
                                            id="fecha_evaluacion">
                                    </div>
                                </div>
                                <div class="form-group row mb-5">
                                    <label for="motivo_consulta" class="col-sm-2 col-form-label">Motivo de la
                                        consulta</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="motivo_consulta"
                                            id="motivo_consulta">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="rut">RUT</label>
                                        <input type="text" class="form-control" name="rut" id="rut"
                                            placeholder="Ingrese el RUT">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre"
                                            placeholder="Ingrese el nombre">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="apellido">Apellido</label>
                                        <input type="text" class="form-control" name="apellido" id="apellido"
                                            placeholder="Ingrese el apellido">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="fecha_nac">Fecha de nacimiento</label>
                                        <input type="date" class="form-control" name="fecha_nacimiento"
                                            id="fecha_nacimiento">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="edad">Edad</label>
                                        <input type="text" class="form-control" name="edad" id="edad">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="sexo">Sexo</label>
                                        <select class="form-control" name="sexo" id="sexo">
                                            <option selected>Seleccione...</option>
                                            <option>Mujer</option>
                                            <option>Hombre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="direccion">Dirección</label>
                                        <input type="text" class="form-control" name="direccion" id="direccion"
                                            placeholder="Ingrese la dirección">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Ingrese el email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nacionalidad">Nacionalidad</label>
                                        <select class="form-control" name="nacionalidad" id="nacionalidad">
                                            <option selected value="Elegir" id="AF">Seleccione...</option>
                                            <option value="Afganistán" id="AF">Afganistán</option>
                                            <option value="Albania" id="AL">Albania</option>
                                            <option value="Alemania" id="DE">Alemania</option>
                                            <option value="Andorra" id="AD">Andorra</option>
                                            <option value="Angola" id="AO">Angola</option>
                                            <option value="Anguila" id="AI">Anguila</option>
                                            <option value="Antártida" id="AQ">Antártida</option>
                                            <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                                            <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                                            <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                                            <option value="Argelia" id="DZ">Argelia</option>
                                            <option value="Argentina" id="AR">Argentina</option>
                                            <option value="Armenia" id="AM">Armenia</option>
                                            <option value="Aruba" id="AW">Aruba</option>
                                            <option value="Australia" id="AU">Australia</option>
                                            <option value="Austria" id="AT">Austria</option>
                                            <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                                            <option value="Bahamas" id="BS">Bahamas</option>
                                            <option value="Bahrein" id="BH">Bahrein</option>
                                            <option value="Bangladesh" id="BD">Bangladesh</option>
                                            <option value="Barbados" id="BB">Barbados</option>
                                            <option value="Bélgica" id="BE">Bélgica</option>
                                            <option value="Belice" id="BZ">Belice</option>
                                            <option value="Benín" id="BJ">Benín</option>
                                            <option value="Bermudas" id="BM">Bermudas</option>
                                            <option value="Bhután" id="BT">Bhután</option>
                                            <option value="Bielorrusia" id="BY">Bielorrusia</option>
                                            <option value="Birmania" id="MM">Birmania</option>
                                            <option value="Bolivia" id="BO">Bolivia</option>
                                            <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                                            <option value="Botsuana" id="BW">Botsuana</option>
                                            <option value="Brasil" id="BR">Brasil</option>
                                            <option value="Brunei" id="BN">Brunei</option>
                                            <option value="Bulgaria" id="BG">Bulgaria</option>
                                            <option value="Burkina Faso" id="BF">Burkina Faso</option>
                                            <option value="Burundi" id="BI">Burundi</option>
                                            <option value="Cabo Verde" id="CV">Cabo Verde</option>
                                            <option value="Camboya" id="KH">Camboya</option>
                                            <option value="Camerún" id="CM">Camerún</option>
                                            <option value="Canadá" id="CA">Canadá</option>
                                            <option value="Chad" id="TD">Chad</option>
                                            <option value="Chile" id="CL">Chile</option>
                                            <option value="China" id="CN">China</option>
                                            <option value="Chipre" id="CY">Chipre</option>
                                            <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del
                                                Vaticano</option>
                                            <option value="Colombia" id="CO">Colombia</option>
                                            <option value="Comores" id="KM">Comores</option>
                                            <option value="Congo" id="CG">Congo</option>
                                            <option value="Corea" id="KR">Corea</option>
                                            <option value="Corea del Norte" id="KP">Corea del Norte</option>
                                            <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                                            <option value="Costa Rica" id="CR">Costa Rica</option>
                                            <option value="Croacia" id="HR">Croacia</option>
                                            <option value="Cuba" id="CU">Cuba</option>
                                            <option value="Dinamarca" id="DK">Dinamarca</option>
                                            <option value="Djibouri" id="DJ">Djibouri</option>
                                            <option value="Dominica" id="DM">Dominica</option>
                                            <option value="Ecuador" id="EC">Ecuador</option>
                                            <option value="Egipto" id="EG">Egipto</option>
                                            <option value="El Salvador" id="SV">El Salvador</option>
                                            <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos
                                            </option>
                                            <option value="Eritrea" id="ER">Eritrea</option>
                                            <option value="Eslovaquia" id="SK">Eslovaquia</option>
                                            <option value="Eslovenia" id="SI">Eslovenia</option>
                                            <option value="España" id="ES">España</option>
                                            <option value="Estados Unidos" id="US">Estados Unidos</option>
                                            <option value="Estonia" id="EE">Estonia</option>
                                            <option value="c" id="ET">Etiopía</option>
                                            <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República
                                                Yugoslava de Macedonia</option>
                                            <option value="Filipinas" id="PH">Filipinas</option>
                                            <option value="Finlandia" id="FI">Finlandia</option>
                                            <option value="Francia" id="FR">Francia</option>
                                            <option value="Gabón" id="GA">Gabón</option>
                                            <option value="Gambia" id="GM">Gambia</option>
                                            <option value="Georgia" id="GE">Georgia</option>
                                            <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia
                                                del Sur y las islas Sandwich del Sur</option>
                                            <option value="Ghana" id="GH">Ghana</option>
                                            <option value="Gibraltar" id="GI">Gibraltar</option>
                                            <option value="Granada" id="GD">Granada</option>
                                            <option value="Grecia" id="GR">Grecia</option>
                                            <option value="Groenlandia" id="GL">Groenlandia</option>
                                            <option value="Guadalupe" id="GP">Guadalupe</option>
                                            <option value="Guam" id="GU">Guam</option>
                                            <option value="Guatemala" id="GT">Guatemala</option>
                                            <option value="Guayana" id="GY">Guayana</option>
                                            <option value="Guayana francesa" id="GF">Guayana francesa</option>
                                            <option value="Guinea" id="GN">Guinea</option>
                                            <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                                            <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                                            <option value="Haití" id="HT">Haití</option>
                                            <option value="Holanda" id="NL">Holanda</option>
                                            <option value="Honduras" id="HN">Honduras</option>
                                            <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                                            <option value="Hungría" id="HU">Hungría</option>
                                            <option value="India" id="IN">India</option>
                                            <option value="Indonesia" id="ID">Indonesia</option>
                                            <option value="Irak" id="IQ">Irak</option>
                                            <option value="Irán" id="IR">Irán</option>
                                            <option value="Irlanda" id="IE">Irlanda</option>
                                            <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                                            <option value="Isla Christmas" id="CX">Isla Christmas</option>
                                            <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas
                                                McDonald</option>
                                            <option value="Islandia" id="IS">Islandia</option>
                                            <option value="Islas Caimán" id="KY">Islas Caimán</option>
                                            <option value="Islas Cook" id="CK">Islas Cook</option>
                                            <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling
                                            </option>
                                            <option value="Islas Faroe" id="FO">Islas Faroe</option>
                                            <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                                            <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas
                                                Falkland</option>
                                            <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte
                                            </option>
                                            <option value="Islas Marshall" id="MH">Islas Marshall</option>
                                            <option value="Islas menores de Estados Unidos" id="UM">Islas menores de
                                                Estados Unidos</option>
                                            <option value="Islas Palau" id="PW">Islas Palau</option>
                                            <option value="Islas Salomón" d="SB">Islas Salomón</option>
                                            <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                                            <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                                            <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                                            <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino
                                                Unido</option>
                                            <option value="Israel" id="IL">Israel</option>
                                            <option value="Italia" id="IT">Italia</option>
                                            <option value="Jamaica" id="JM">Jamaica</option>
                                            <option value="Japón" id="JP">Japón</option>
                                            <option value="Jordania" id="JO">Jordania</option>
                                            <option value="Kazajistán" id="KZ">Kazajistán</option>
                                            <option value="Kenia" id="KE">Kenia</option>
                                            <option value="Kirguizistán" id="KG">Kirguizistán</option>
                                            <option value="Kiribati" id="KI">Kiribati</option>
                                            <option value="Kuwait" id="KW">Kuwait</option>
                                            <option value="Laos" id="LA">Laos</option>
                                            <option value="Lesoto" id="LS">Lesoto</option>
                                            <option value="Letonia" id="LV">Letonia</option>
                                            <option value="Líbano" id="LB">Líbano</option>
                                            <option value="Liberia" id="LR">Liberia</option>
                                            <option value="Libia" id="LY">Libia</option>
                                            <option value="Liechtenstein" id="LI">Liechtenstein</option>
                                            <option value="Lituania" id="LT">Lituania</option>
                                            <option value="Luxemburgo" id="LU">Luxemburgo</option>
                                            <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                                            <option value="Madagascar" id="MG">Madagascar</option>
                                            <option value="Malasia" id="MY">Malasia</option>
                                            <option value="Malawi" id="MW">Malawi</option>
                                            <option value="Maldivas" id="MV">Maldivas</option>
                                            <option value="Malí" id="ML">Malí</option>
                                            <option value="Malta" id="MT">Malta</option>
                                            <option value="Marruecos" id="MA">Marruecos</option>
                                            <option value="Martinica" id="MQ">Martinica</option>
                                            <option value="Mauricio" id="MU">Mauricio</option>
                                            <option value="Mauritania" id="MR">Mauritania</option>
                                            <option value="Mayotte" id="YT">Mayotte</option>
                                            <option value="México" id="MX">México</option>
                                            <option value="Micronesia" id="FM">Micronesia</option>
                                            <option value="Moldavia" id="MD">Moldavia</option>
                                            <option value="Mónaco" id="MC">Mónaco</option>
                                            <option value="Mongolia" id="MN">Mongolia</option>
                                            <option value="Montserrat" id="MS">Montserrat</option>
                                            <option value="Mozambique" id="MZ">Mozambique</option>
                                            <option value="Namibia" id="NA">Namibia</option>
                                            <option value="Nauru" id="NR">Nauru</option>
                                            <option value="Nepal" id="NP">Nepal</option>
                                            <option value="Nicaragua" id="NI">Nicaragua</option>
                                            <option value="Níger" id="NE">Níger</option>
                                            <option value="Nigeria" id="NG">Nigeria</option>
                                            <option value="Niue" id="NU">Niue</option>
                                            <option value="Norfolk" id="NF">Norfolk</option>
                                            <option value="Noruega" id="NO">Noruega</option>
                                            <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                                            <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                                            <option value="Omán" id="OM">Omán</option>
                                            <option value="Panamá" id="PA">Panamá</option>
                                            <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                                            <option value="Paquistán" id="PK">Paquistán</option>
                                            <option value="Paraguay" id="PY">Paraguay</option>
                                            <option value="Perú" id="PE">Perú</option>
                                            <option value="Pitcairn" id="PN">Pitcairn</option>
                                            <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                                            <option value="Polonia" id="PL">Polonia</option>
                                            <option value="Portugal" id="PT">Portugal</option>
                                            <option value="Puerto Rico" id="PR">Puerto Rico</option>
                                            <option value="Qatar" id="QA">Qatar</option>
                                            <option value="Reino Unido" id="UK">Reino Unido</option>
                                            <option value="República Centroafricana" id="CF">República Centroafricana
                                            </option>
                                            <option value="República Checa" id="CZ">República Checa</option>
                                            <option value="República de Sudáfrica" id="ZA">República de Sudáfrica
                                            </option>
                                            <option value="República Democrática del Congo Zaire" id="CD">República
                                                Democrática del Congo Zaire</option>
                                            <option value="República Dominicana" id="DO">República Dominicana</option>
                                            <option value="Reunión" id="RE">Reunión</option>
                                            <option value="Ruanda" id="RW">Ruanda</option>
                                            <option value="Rumania" id="RO">Rumania</option>
                                            <option value="Rusia" id="RU">Rusia</option>
                                            <option value="Samoa" id="WS">Samoa</option>
                                            <option value="Samoa occidental" id="AS">Samoa occidental</option>
                                            <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                                            <option value="San Marino" id="SM">San Marino</option>
                                            <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                                            <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas
                                                Granadinas</option>
                                            <option value="Santa Helena" id="SH">Santa Helena</option>
                                            <option value="Santa Lucía" id="LC">Santa Lucía</option>
                                            <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                                            <option value="Senegal" id="SN">Senegal</option>
                                            <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                                            <option value="Sychelles" id="SC">Seychelles</option>
                                            <option value="Sierra Leona" id="SL">Sierra Leona</option>
                                            <option value="Singapur" id="SG">Singapur</option>
                                            <option value="Siria" id="SY">Siria</option>
                                            <option value="Somalia" id="SO">Somalia</option>
                                            <option value="Sri Lanka" id="LK">Sri Lanka</option>
                                            <option value="Suazilandia" id="SZ">Suazilandia</option>
                                            <option value="Sudán" id="SD">Sudán</option>
                                            <option value="Suecia" id="SE">Suecia</option>
                                            <option value="Suiza" id="CH">Suiza</option>
                                            <option value="Surinam" id="SR">Surinam</option>
                                            <option value="Svalbard" id="SJ">Svalbard</option>
                                            <option value="Tailandia" id="TH">Tailandia</option>
                                            <option value="Taiwán" id="TW">Taiwán</option>
                                            <option value="Tanzania" id="TZ">Tanzania</option>
                                            <option value="Tayikistán" id="TJ">Tayikistán</option>
                                            <option value="Territorios británicos del océano Indico" id="IO">Territorios
                                                británicos del océano Indico</option>
                                            <option value="Territorios franceses del sur" id="TF">Territorios franceses
                                                del sur</option>
                                            <option value="Timor Oriental" id="TP">Timor Oriental</option>
                                            <option value="Togo" id="TG">Togo</option>
                                            <option value="Tonga" id="TO">Tonga</option>
                                            <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                                            <option value="Túnez" id="TN">Túnez</option>
                                            <option value="Turkmenistán" id="TM">Turkmenistán</option>
                                            <option value="Turquía" id="TR">Turquía</option>
                                            <option value="Tuvalu" id="TV">Tuvalu</option>
                                            <option value="Ucrania" id="UA">Ucrania</option>
                                            <option value="Uganda" id="UG">Uganda</option>
                                            <option value="Uruguay" id="UY">Uruguay</option>
                                            <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                                            <option value="Vanuatu" id="VU">Vanuatu</option>
                                            <option value="Venezuela" id="VE">Venezuela</option>
                                            <option value="Vietnam" id="VN">Vietnam</option>
                                            <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                                            <option value="Yemen" id="YE">Yemen</option>
                                            <option value="Zambia" id="ZM">Zambia</option>
                                            <option value="Zimbabue" id="ZW">Zimbabue</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="actividad">Actividad / Trabajo</label>
                                        <input type="text" class="form-control" name="actividad" id="actividad"
                                            placeholder="Ingrese la actividad">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="enteraste_bahn">¿Cómo te enteraste de BAHN?</label>
                                        <input type="text" class="form-control" name="enteraste_bahn"
                                            id="enteraste_bahn">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <h5 class="card-header">Antecedentes Clínicos</h5>
                            <div class="card-body">
                                <label>Familiares</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        ECV
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Presión arterial elevada
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Diabetes
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Obesidad
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Alteración de los lípidos sanguíneos
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Desnutrición
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Anemia
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Osteoporosis
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Arritmia
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Angina
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Infarto
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Accidente vascular cerebral
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Accidente vascular periférico
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Cáncer
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Enf. respiratorias: asma, neumonía.
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_familiares_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_familiares" id="otros_familiares" disabled>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <label class="mt-3">Mórbidos de salud</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        ECV
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Presión arterial elevada
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Diabetes
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Obesidad
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Alteración de los lípidos sanguíneos
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Desnutrición
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Anemia
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Osteoporosis
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Arritmia
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Angina
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Infarto
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Accidente vascular cerebral
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Accidente vascular periférico
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Cáncer
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Enf. respiratorias: asma, neumonía.
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_morbidos_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_morbidos" id="otros_morbidos" disabled>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <h5 class="card-header">Salud Actual</h5>
                            <div class="card-body">
                                <label>Presión arterial en reposo:</label>
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <label for="ps">PS</label>
                                        <input type="number" class="form-control" name="ps" id="ps" placeholder="PS">
                                    </div>

                                    <div class="col-md-2">
                                        <label for="pd">PD</label>
                                        <input type="number" class="form-control" name="pd" id="pd" placeholder="PD">
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <label for="enfermedad_reciente">Especificar alguna enfermedad reciente o
                                            síntomas (en el último año)</label>
                                        <textarea class="form-control" name="enfermedad_reciente"
                                            id="enfermedad_reciente" rows="4"></textarea>
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <label for="examenes_sangre">Exámenes de sangre (en los últimos 3 meses)</label>
                                        <textarea class="form-control" name="examenes_sangre" id="examenes_sangre"
                                            rows="4"></textarea>
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <label for="lesiones_fracturas">Lesiones / fracturas</label>
                                        <textarea class="form-control" name="lesiones_fracturas" id="lesiones_fracturas"
                                            rows="4"></textarea>
                                    </div>
                                </div>

                                <label class="mt-3">Medicamentos</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Paracetamol
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Ácido acetilsalicílico
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Losartan
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Metformina
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Atorvastatina
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Hidroclorotiazida
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Omeprazol
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Levotiroxina de sodio
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Enalapril
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Etinilestradiol
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Ibuprofeno
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Calcio carbonato
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Atenolol
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Colecalciferol
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_medicamentos_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_medicamentos" id="otros_medicamentos" disabled>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <br>
                                <label class="mt-3">Suplementos</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Vitaminas
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Minerales
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Omega 3
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Ayudas Ergogénicas: creatina, bbc, proteínas, etc.
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_suplementos_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_suplementos" id="otros_suplementos" disabled>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <label class="mt-3">Deposiciones sólidas y líquidas</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="heces">Heces</label>
                                        <textarea class="form-control" name="heces" id="heces" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <label for="orina">Orina</label>
                                        <textarea class="form-control" name="orina" id="orina" rows="4"></textarea>
                                    </div>
                                </div>

                                <label class="mt-3">Alergia(s) Alimentaria(s)</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Maní
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Nueces
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Huevo
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Pescado
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Mariscos
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Proteína leche de vaca
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Leche
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_alergia_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_alergia" id="otros_alergia" disabled>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <label class="mt-3">Intolerancia Alimentaria</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Gluten
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Trigo
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Lácteos y derivados
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_intolerancia_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_intolerancia" id="otros_intolerancia" disabled>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <label class="mt-3">Dieta especial</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Mixta (Omnívora)
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Vegetariana / Vegana
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Sin gluten
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Especial por causas clínicas
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_dieta_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_dieta" id="otros_dieta" disabled>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <label class="mt-3">Tabaquismo</label>
                                <div class="form-row">
                                    <div class="input-group col-md-4 mb-2">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="tabaco"><i
                                                    class="fas fa-smoking"></i></label>
                                        </div>
                                        <select class="custom-select" id="tabaco">
                                            <option selected>Seleccione...</option>
                                            <option value="si">Sí</option>
                                            <option value="no">No</option>
                                            <option value="cannabis">Cannabis</option>
                                        </select>
                                    </div>
                                    <div class="input-group col-md-5 mb-2">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="frecuecia_tabaco">Frecuencia</label>
                                        </div>
                                        <input type="number" class="form-control" name="cantidad_tabaco"
                                            id="cantidad_tabaco" placeholder="Cantidad #">
                                        <select class="custom-select" id="frecuecia_tabaco">
                                            <option selected>Seleccione...</option>
                                            <option value="diarios">Diarios</option>
                                            <option value="semanales">Semanales</option>
                                            <option value="mensuales">Mensuales</option>
                                        </select>
                                    </div>
                                    <div class="input-group col-md-3 mb-2">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="edad_inicio_tabaco">A qué edad
                                                inicia</label>
                                        </div>
                                        <input type="number" class="form-control" name="otros_dieta"
                                            id="edad_inicio_tabaco">
                                    </div>
                                </div>

                                <label class="mt-3">Alcohol</label>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Vino Tinto
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Vino Blanco
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Vino Espumante
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Cerveza
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Pisco
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Ron
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Whisky
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Ginebra
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Vodka
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_alcohol_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_alcohol" id="otros_alcohol" disabled>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="fecha_eval" class="col-md-3 col-form-label">Frecuencia</label>
                                            <div class="col-md-9">
                                                <div class="input-group col-md-12 mb-2">
                                                    <input type="number" class="form-control" name="cantidad_tabaco"
                                                        id="cantidad_alcohol" placeholder="Cantidad #">
                                                    <select class="custom-select" id="frecuecia_alcohol"
                                                        name="frecuencia_alcohol">
                                                        <option selected>Seleccione...</option>
                                                        <option value="diarios">Diarios</option>
                                                        <option value="semanales">Semanales</option>
                                                        <option value="mensuales">Mensuales</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <label class="mt-3">Horas / Calidad del sueño</label>
                                <div class="form-row">
                                    <div class="input-group col-md-4 mb-2">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="horas_sleep">Horas</label>
                                        </div>
                                        <input type="time" class="form-control" name="horas_sleep" id="horas_sleep">
                                    </div>
                                    <div class="input-group col-md-4 mb-2">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="calidad_sleep">Calidad del sueño</label>
                                        </div>
                                        <input class="form-control" list="calidad_sleeps" name="calidad_sleep" id="calidad_sleep">

                                        <datalist id="calidad_sleeps">
                                            <option value="Mala">
                                            <option value="Intermitente">
                                            <option value="Regular">
                                            <option value="Buena">
                                        </datalist>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Actividad Física</h5>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="historia_deportiva">Historia Deportiva</label>
                                        <textarea class="form-control" name="historia_deportiva" id="historia_deportiva"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <label for="elem_eval_participativa">Elementos Evaluación Preparticipativa
                                            (EPP)</label>
                                        <textarea class="form-control" name="elem_eval_participativa"
                                            id="elem_eval_participativa" rows="4"></textarea>
                                    </div>
                                </div>
                                <label class="mt-3">Entrenamiento</label>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="tipo_act_entrenamiento">Tipo de actividad</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select class="form-control" name="intensidad" id="intensidad">
                                                    <option selected>Seleccione...</option>
                                                    <option>Recreativa</option>
                                                    <option>Competitiva</option>
                                                    <option>Deportiva competitiva</option>
                                                </select>
                                            </div>
                                            <input type="text" class="form-control" name="tipo_actividad"
                                                id="tipo_actividad">
                                        </div>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="frecuencia_entrenamiento">Frecuencia</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select class="form-control" name="frecuencia_entrenamiento" id="frecuencia_entrenamiento">
                                                    <option selected>Seleccione...</option>
                                                    <option>Diario</option>
                                                    <option>Semanal</option>
                                                    <option>Mensual</option>
                                                </select>
                                            </div>
                                            <input type="text" class="form-control" name="desc_frecuencia_entrenamiento"
                                                id="desc_frecuencia_entrenamiento">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="duracion_entrenamiento">Duración</label>
                                        <input type="time" class="form-control" name="duracion_entrenamiento"
                                            id="duracion_entrenamiento">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="intensidad_entrenamiento">Intensidad</label>
                                        <input id="intensidad_entrenamiento" data-slider-id='ex1Slider' type="text"
                                            data-slider-min="0" data-slider-max="10" data-slider-step="1"
                                            data-slider-value="5" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nivel_act_fisica">Nivel de actividad física</label>
                                        <select class="form-control" name="nivel_act_fisica" id="nivel_act_fisica">
                                            <option selected>Seleccione...</option>
                                            <option>1,3 - Sedentaria</option>
                                            <option>1,6 - Liviana</option>
                                            <option>1,7 - Moderada</option>
                                            <option>2,1 - Fuerte</option>
                                            <option>2,4 - Extrema</option>
                                            <option>1,3 - Sedentaria</option>
                                            <option>1,5 - Liviana</option>
                                            <option>1,6 - Moderada</option>
                                            <option>1,9 - Fuerte</option>
                                            <option>2,2 - Extrema</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Hábitos de Alimentación</h5>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="historia_deportiva">Nº de personas que conforman el hogar</label>
                                        <input type="number" class="form-control" name="frecuencia_entrenamiento"
                                            id="frecuencia_entrenamiento">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="frecuencia_entrenamiento">Hábito de cocinar / ¿Quien está a cargo?</label>
                                        <input type="text" class="form-control" name="frecuencia_entrenamiento"
                                            id="frecuencia_entrenamiento">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="frecuencia_entrenamiento">¿Cuántas veces cocina a la semana?</label>
                                        <input type="number" class="form-control" name="frecuencia_entrenamiento"
                                            id="frecuencia_entrenamiento">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="nivel_act_fisica">Abastecimiento</label>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <ul class="checkbox-grid">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Supermercados
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Ferias
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Pequeños almacenes
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-group input-group-sm">
                                                            <div class="input-group-addon form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="otros_abastecimiento_checkbox">
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Otros"
                                                                name="otros_abastecimiento" id="otros_abastecimiento" disabled>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="planificacion">Planificación alimentaria</label>
                                        <select class="form-control" name="planificacion" id="planificacion">
                                            <option selected>Seleccione...</option>
                                            <option>Apenas planifica</option>
                                            <option>Poca planificación</option>
                                            <option>Adecuada</option>
                                            <option>Algo planificada</option>
                                            <option>Muy planificada</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="calificacion">Calificación</label>
                                        <select class="form-control" name="calificacion" id="calificacion">
                                            <option selected>Seleccione...</option>
                                            <option>Apenas saludable</option>
                                            <option>Poco saludable</option>
                                            <option>Adecuada</option>
                                            <option>Algo saludable</option>
                                            <option>Muy saludable</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="org_compras_frecuencia">Organización de compras / Frecuencia</label>
                                        <textarea class="form-control" name="org_compras_frecuencia" id="org_compras_frecuencia"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <label for="platos_tipicos">Nombra cuatro platos típicos que preparas</label>
                                        <textarea class="form-control" name="platos_tipicos" id="platos_tipicos"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <label for="genograma_familiar">Genograma Familiar</label>
                                        <textarea class="form-control" name="genograma_familiar" id="genograma_familiar"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Objetivos</h5>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="obj_ppal">Principal</label>
                                        <textarea class="form-control" name="obj_ppal" id="obj_ppal"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <label for="obj_secundarios">Secundarios</label>
                                        <textarea class="form-control" name="obj_secundarios" id="obj_secundarios"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="form-group col-md-4">
                                        <label for="peso">Peso</label>
                                        <input type="number" class="form-control" name="peso" id="peso">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="fecha_peso">Fecha</label>
                                        <input type="date" class="form-control" name="fecha_peso"
                                            id="fecha_peso">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Solicitud de Exámenes</h5>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="examanes_sangre">Exámenes de Sangre</label>
                                        <textarea class="form-control" name="examanes_sangre" id="examanes_sangre"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="form-group col-md-4">
                                        <label for="examenes_sangre">Exámenes de Orina</label>
                                        <input type="text" class="form-control" name="examenes_sangre" id="examenes_sangre">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="electrocardiograma">Electrocardiograma</label>
                                        <input type="text" class="form-control" name="electrocardiograma" id="electrocardiograma">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="derivacion_prof_salud">Derivación Prof. de Salud</label>
                                        <input type="text" class="form-control" name="derivacion_prof_salud" id="derivacion_prof_salud">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Indicación del Programa</h5>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="indicacion_programa">Programa</label>
                                        <select class="form-control" name="indicacion_programa" id="indicacion_programa">
                                            <option selected>Seleccione...</option>
                                            <option>Adolescente</option>
                                            <option>Adulto</option>
                                            <option>Adulto Mayor</option>
                                            <option>Vegetariano y Vegano</option>
                                            <option>Deportista</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="antropometria" role="tabpanel" aria-labelledby="antropometria-tab">
            <div class="row">
                <div class="col-sm-12">
                    <form action="/pacientes" method="POST" id="ingresoForm">
                        @csrf
                        <div class="card">
                            <h5 class="card-header">Actividad Física</h5>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="historia_deportiva">Historia Deportiva</label>
                                        <textarea class="form-control" name="historia_deportiva" id="historia_deportiva"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <label for="elem_eval_participativa">Elementos Evaluación Participativa
                                            (EPP)</label>
                                        <textarea class="form-control" name="elem_eval_participativa"
                                            id="elem_eval_participativa" rows="4"></textarea>
                                    </div>
                                </div>
                                <label class="mt-3">Entrenamiento</label>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="tipo_act_entrenamiento">Tipo de actividad</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select class="form-control" name="intensidad" id="intensidad">
                                                    <option selected>Seleccione...</option>
                                                    <option>Recreativa</option>
                                                    <option>Competitiva</option>
                                                    <option>Deportiva competitiva</option>
                                                </select>
                                            </div>
                                            <input type="text" class="form-control" name="tipo_act_entrenamiento"
                                                id="tipo_act_entrenamiento">
                                        </div>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="frecuencia_entrenmiento">Frecuencia</label>
                                        <input type="text" class="form-control" name="frecuencia_entrenmiento"
                                            id="frecuencia_entrenmiento">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="duracion_entrenamiento">Duración</label>
                                        <input type="text" class="form-control" name="duracion_entrenamiento"
                                            id="duracion_entrenamiento">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="intensidad_entrenamiento">Intensidad</label>
                                        <input id="intensidad_entrenamiento" data-slider-id='ex1Slider' type="text"
                                            data-slider-min="0" data-slider-max="10" data-slider-step="1"
                                            data-slider-value="5" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nivel_act_fisica">Nivel de actividad física</label>
                                        <select class="form-control" name="nivel_act_fisica" id="nivel_act_fisica">
                                            <option selected>Seleccione...</option>
                                            <option>1,3 - Sedentaria</option>
                                            <option>1,6 - Liviana</option>
                                            <option>1,7 - Moderada</option>
                                            <option>2,1 - Fuerte</option>
                                            <option>2,4 - Extrema</option>
                                            <option>1,3 - Sedentaria</option>
                                            <option>1,5 - Liviana</option>
                                            <option>1,6 - Moderada</option>
                                            <option>1,9 - Fuerte</option>
                                            <option>2,2 - Extrema</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <h5 class="card-header">Hábitos de Alimentación</h5>
                            <div class="card-body">
                                <label>Familiares</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        ECV
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Presión arterial elevada
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Diabetes
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Obesidad
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Alteración de los lípidos sanguíneos
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Desnutrición
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Anemia
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Osteoporosis
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Arritmia
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Angina
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Infarto
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Accidente vascular cerebral
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Accidente vascular periférico
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Cáncer
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Enf. respiratorias: asma, neumonía.
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_familiares_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_familiares" id="otros_familiares" disabled>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <label class="mt-3">Mórbidos de salud</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        ECV
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Presión arterial elevada
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Diabetes
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Obesidad
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Alteración de los lípidos sanguíneos
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Desnutrición
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Anemia
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Osteoporosis
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Arritmia
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Angina
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Infarto
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Accidente vascular cerebral
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Accidente vascular periférico
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Cáncer
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Enf. respiratorias: asma, neumonía.
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_morbidos_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_morbidos" id="otros_morbidos" disabled>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <h5 class="card-header">Salud Actual</h5>
                            <div class="card-body">
                                <label>Presión arterial en reposo:</label>
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <label for="ps">PS</label>
                                        <input type="number" class="form-control" name="ps" id="ps" placeholder="PS">
                                    </div>

                                    <div class="col-md-2">
                                        <label for="pd">PD</label>
                                        <input type="number" class="form-control" name="pd" id="pd" placeholder="PD">
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <label for="enfermedad_reciente">Especificar alguna enfermedad reciente o
                                            síntomas (en el último año)</label>
                                        <textarea class="form-control" name="enfermedad_reciente"
                                            id="enfermedad_reciente" rows="4"></textarea>
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <label for="examenes_sangre">Exámenes de sangre (en los últimos 3 meses)</label>
                                        <textarea class="form-control" name="examenes_sangre" id="examenes_sangre"
                                            rows="4"></textarea>
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <label for="lesiones_fracturas">Lesiones / fracturas</label>
                                        <textarea class="form-control" name="lesiones_fracturas" id="lesiones_fracturas"
                                            rows="4"></textarea>
                                    </div>
                                </div>

                                <label class="mt-3">Medicamentos</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Paracetamol
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Ácido acetilsalicílico
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Losartan
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Metformina
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Atorvastatina
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Hidroclorotiazida
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Omeprazol
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Levotiroxina de sodio
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Enalapril
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Etinilestradiol
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Ibuprofeno
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Calcio carbonato
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Atenolol
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Colecalciferol
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_medicamentos_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_medicamentos" id="otros_medicamentos" disabled>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <br>
                                <label class="mt-3">Suplementos</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Vitaminas
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Minerales
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Omega 3
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Ayudas Ergogénicas: creatina, bbc, proteínas, etc.
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_suplementos_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_suplementos" id="otros_suplementos" disabled>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <label class="mt-3">Deposiciones sólidas y líquidas</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="heces">Heces</label>
                                        <textarea class="form-control" name="heces" id="heces" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-12">
                                        <label for="orina">Orina</label>
                                        <textarea class="form-control" name="orina" id="orina" rows="4"></textarea>
                                    </div>
                                </div>

                                <label class="mt-3">Alergia(s) Alimentaria(s)</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Maní
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Nueces
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Huevo
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Pescado
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Mariscos
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Proteína leche de vaca
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Leche
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_alergia_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_alergia" id="otros_alergia" disabled>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <label class="mt-3">Intolerancia Alimentaria</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Gluten
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Trigo
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Lácteos y derivados
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_intolerancia_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_intolerancia" id="otros_intolerancia" disabled>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <label class="mt-3">Dieta especial</label>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <ul class="checkbox-grid">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Mixta (Omnívora)
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Vegetariana / Vegana
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Sin gluten
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Especial por causas clínicas
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otros_dieta_checkbox">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Otros"
                                                        name="otros_dieta" id="otros_dieta" disabled>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <label class="mt-3">Tabaquismo</label>
                                <div class="form-row">
                                    <div class="input-group col-md-4 mb-2">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="tabaco"><i
                                                    class="fas fa-smoking"></i></label>
                                        </div>
                                        <select class="custom-select" id="tabaco">
                                            <option selected>Seleccione...</option>
                                            <option value="Si">Sí</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="input-group col-md-4 mb-2">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="frecuecia_tabaco">Frecuencia</label>
                                        </div>
                                        <select class="custom-select" id="frecuecia_tabaco">
                                            <option selected>Seleccione...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="input-group col-md-4 mb-2">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="edad_inicio_tabaco">A qué edad
                                                inicia</label>
                                        </div>
                                        <input type="number" class="form-control" name="otros_dieta"
                                            id="edad_inicio_tabaco">
                                    </div>
                                </div>

                                <label class="mt-3">Alcohol</label>
                                <div class="form-row">
                                    <div class="input-group col-md-4 mb-2">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="alcohol"><i
                                                    class="fas fa-cocktail"></i></label>
                                        </div>
                                        <select class="custom-select" id="alcohol">
                                            <option selected>Tipo de bebida...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="input-group col-md-4 mb-2">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="frecuecia_tabaco">Frecuencia</label>
                                        </div>
                                        <select class="custom-select" id="frecuecia_tabaco">
                                            <option selected>Seleccione...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="input-group col-md-4 mb-2">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="edad_inicio_tabaco">Cant. Vasos</label>
                                        </div>
                                        <input type="number" class="form-control" name="otros_dieta"
                                            id="edad_inicio_tabaco">
                                    </div>
                                </div>

                                <label class="mt-3">Horas / Calidad del sueño</label>
                                <div class="form-row">
                                    <div class="input-group col-md-4 mb-2">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="horas_sueno">Horas</label>
                                        </div>
                                        <input type="number" class="form-control" name="horas_sueno" id="horas_sueno">
                                    </div>
                                    <div class="input-group col-md-4 mb-2">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="caliad_sueno">Calidad del sueño</label>
                                        </div>
                                        <select class="custom-select" id="caliad_sueno">
                                            <option selected>Seleccione...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="gasto-energetico" role="tabpanel" aria-labelledby="gasto-energetico-tab">
            Gasto Energético
        </div>

        <div class="tab-pane fade" id="anamnesis-alimentaria" role="tabpanel"
            aria-labelledby="anamnesis-alimentaria-tab">
            Anamnesis Alimentaria
        </div>

        <div class="tab-pane fade" id="anamnesis-alimentaria-post" role="tabpanel"
            aria-labelledby="anamnesis-alimentaria-post-tab">
            Anamnesis Alimentaria (Post 6 meses )
        </div>

        <div class="tab-pane fade" id="req-nutricionales-1" role="tabpanel" aria-labelledby="req-nutricionales-1-tab">
            Requerimientos Nutricionales 1
        </div>
        <div class="tab-pane fade" id="req-nutricionales-2" role="tabpanel" aria-labelledby="req-nutricionales-2-tab">
            Requerimientos Nutricionales 2
        </div>
        <div class="tab-pane fade" id="req-nutricionales-3" role="tabpanel" aria-labelledby="req-nutricionales-3-tab">
            Requerimientos Nutricionales 3
        </div>

        <div class="tab-pane fade" id="seguimiento" role="tabpanel" aria-labelledby="seguimiento-tab">
            Seguimiento
        </div>

        <div class="tab-pane fade" id="ayudas-ergogenicas" role="tabpanel" aria-labelledby="ayudas-ergogenicas-tab">
            Despensa Ayudas Ergogénicas
        </div>

        <div class="tab-pane fade" id="alimentos-funcionales" role="tabpanel"
            aria-labelledby="alimentos-funcionales-tab">
            Alimentos Funcionales
        </div>
    </div>


</div>
@push('scripts')
<script>
    window.onload = function() {
        var fecha = new Date(); //Fecha actual
        var mes = fecha.getMonth() + 1; //obteniendo mes
        var dia = fecha.getDate(); //obteniendo dia
        var ano = fecha.getFullYear(); //obteniendo año
        if (dia < 10)
            dia = '0' + dia;
        if (mes < 10)
            mes = '0' + mes
        document.getElementById('fecha_evaluacion').value = ano + "-" + mes + "-" + dia;
    }

    $("#otros_familiares_checkbox").click(function() {
        $("#otros_familiares").attr("disabled", !this.checked);
    });

    $("#otros_morbidos_checkbox").click(function() {
        $("#otros_morbidos").attr("disabled", !this.checked);
    });

    $("#otros_medicamentos_checkbox").click(function() {
        $("#otros_medicamentos").attr("disabled", !this.checked);
    });

    $("#otros_suplementos_checkbox").click(function() {
        $("#otros_suplementos").attr("disabled", !this.checked);
    });

    $("#otros_alergia_checkbox").click(function() {
        $("#otros_alergia").attr("disabled", !this.checked);
    });

    $("#otros_intolerancia_checkbox").click(function() {
        $("#otros_intolerancia").attr("disabled", !this.checked);
    });

    $("#otros_dieta_checkbox").click(function() {
        $("#otros_dieta").attr("disabled", !this.checked);
    });

    $("#otros_alcohol_checkbox").click(function() {
        $("#otros_alcohol").attr("disabled", !this.checked);
    });

    $("#otros_abastecimiento_checkbox").click(function() {
        $("#otros_abastecimiento").attr("disabled", !this.checked);
    });

    $('#intensidad_entrenamiento').slider({
        formatter: function(value) {
            return 'Autopercepción: ' + value;
        }
    });

</script>

@endpush


@endsection
