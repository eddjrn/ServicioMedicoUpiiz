<input type="button" value="Imprime esta pagina" onclick="window.print()"> 

<table border="1">
        <tr>
        <td>
    <table>
        <tr align="Center">
            <td colspan="5"><img src="https://pbs.twimg.com/profile_images/344513261565325307/746aa12a74c9c5f55de34248100339a8_400x400.png" width="7%">INSTITUTO MEXICANO DEL SEGURO SOCIAL</br>Seguridad y Solidaridad Social</td>
        </tr>
        <tr>
            <td align="Center" colspan="5">SOLICITUD DE INSCRIPCION AL SEGURO DE SALUD PARA ESTUDIANTES</td>
        </tr>
        <tr>
            <td colspan="5" align="right">_________</td>
        </tr>
        <tr>
            <td colspan="5" align="right">FOLIO</td>
        </tr>
        <tr>
            <td colspan="2">
                <table border="1">
                    <tr>
                        <td>
                        <table>
                            <tr>
                                <td align="Center" colspan="2"><STRONG>DATOS DEL PLANTES EDUCATIVO</STRONG></td>
                            </tr>
                            <tr>
                                <td>NOMBRE: &nbsp</td>
                                <td align="Center">&nbsp IPN - UNIDAD PROFESIONAL INTERDISCIPLINARIA </BR>DE INGENIERÍA CAMPUS ZACATECAS</td>
                            </tr>
                            <tr>
                                <td>CLAVE: &nbsp</td>
                                <td align="Center">&nbsp 32DPN0001</td>
                            </tr>
                            <tr>
                                <td>|</td>
                            </tr>
                            <tr>
                                
                            </tr>
                        </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="3">
                <table border="1">
                    <tr>
                        <td>
                        <table>
                            <tr>
                                <td align="Center" colspan="2"><strong>DATOS DEL I.M.S.S.</strong></td>
                            </tr>
                            <tr>
                                <td>REGISTRO IMSS DEL PLANTEL: &nbsp</td>
                                <td align="Center">H09-99039-32-5</td>
                            </tr>
                            <tr>
                                <td>NUMERO DE SEGURO SOCIAL: <strong>{{$student->user->medicalData->numSeguro}}</td>
                                <td>&nbsp</td>
                            </tr>
                            <tr>
                                <td>CURP: <strong>{{$student->curp}}</td>
                                <td>&nbsp</td>
                            </tr>
                            <tr>
                                <td>NUMERO DE UMF: <strong>{{$student->user->medicalData->clinic}}</td>
                                <td>&nbsp</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5">|</td>
        </tr>
        <tr>
            <tr>
            <td colspan="5" align="Center"><strong>DATOS DEL ESTUDIANTE</strong></td>
            </tr>
            <tr>
                <td>A)</td>
                <td colspan="2">NOMBRE:<strong>&nbsp;&nbsp;{{$student->user->apellidoPaterno}} {{$student->user->apellidoMaterno}} {{$student->user->nombre}}</strong></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" align="right"></td>
                <td colspan="2" align="Center"></td>
            </tr>
            <tr>
                <td>B)</td>
                <td align="Center">SEXO: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 1) MASCULINO</td>
                <td colspan="3">2) FEMENINO</td>
            </tr>
            <tr>
                <td>C)</td>
                <td>FECHA DE NACIMIENTO:&nbsp;&nbsp;&nbsp;&nbsp;<strong>{{$student->formatedNacimiento()}}</strong></td>
                <td align="Center"></td>
                <td align="Center"></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td align="Center">DIA</td>
                <td align="Center">MES</td>
                <td>AÑO</td>
            </tr>
            <tr>
                <td>D)</td>
                <td>LUGAR DE NACIMIENTO: <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$student->state->nombre}} </td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td>E)</td>
                <td>DOMICILIO:<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$student->calle}} {{$student->numInterior}} {{$student->colonia}} {{$student->codigoPostal}}</td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td colspan="2" align="right">CALLE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp NUMERO</td>
                <td colspan="3" align="Center">LOCALIDAD &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CP</td>
            </tr>
            <tr>
                <td>F)</td>
                <td>Nombre de los Padres: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp PADRE:</td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td></td>
                <td align="Center"> MADRE:</td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td>G)</td>
                <td>¿ADEMAS DE ESTUDIAR TRABAJA?</td>
                <td>1) SI</td>
                <td align="Center">2) NO</td>
                <td align="Center">( )</td>
            </tr>
            <tr>
                <td>H)</td>
                <td>¿DE QUIEN DEPENDE ECONOMICAMENTE? &nbsp &nbsp &nbsp1) PADRE</td>
                <td>2) CONYUGUE</td>
                <td align="Center">3) OTROS</td>
                <td align="Center">( )</td>
            </tr>
            <tr>
                <td>I)</td>
                <td colspan="4">¿EN QUE TRABAJA LA PERSONA DE LA QUE DEPENDE ECONOMICAMENTE?</td>
            </tr>
            <tr>
                <td colspan="5">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1) SERVIDOR PUBLICO &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 5) MARINO O MILITAR</td>
            </tr>
            <tr>
                <td align="Center" colspan="5">2) EMPLEADO DE EMPRESA PARTICULAR &nbsp &nbsp &nbsp &nbsp6) AGRICULTOR, GANADERO, CAMPESINO, PESCADOR</td>
            </tr>
            <tr>
                <td colspan="5">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3) PROFESION U OFICIO POR SU CUENTA &nbsp &nbsp &nbsp &nbsp 7) OBRERO</td>
            </tr>
            <tr>
                <td colspan="4">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp4) COMERCIANTE O INDUSTRIAL &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp8) OTROS</td>
                <td align="Center">( )</td>
            </tr>
            <tr>
                <td colspan="5" align="Center">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ESPECIFIQUE</td>
            </tr>
            <tr>
                <td>J)</td>
                <td colspan="4">¿SE ENCUENTRA PROTEGIDO, YA SEA COMO TRABAJADOR COMO BENEFICIARIO DE SUS PADRES O DE SU</br> CONYUGUE, ALGUNA INSTITUCION DE SEGURIDAD?</td>
            </tr>
            <tr>
                <td colspan="2" align="Center">1) SI</td>
                <td colspan="2">2) NO</td>
                <td>( )</td>
            </tr>
            <tr>
                <td>K)</td>
                <td colspan="4">¿QUE INSTITUCION LE DA SERVICIOS MEDICOS?</td>
            </tr>
            <tr>
                <td colspan="5">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1) SEGURO SOCIAL &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp5) PEMEX</td>
            </tr>
            <tr>
                <td colspan="5">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp2) ISSSTE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 6) INSTITUTO NACIONAL DE CREDITO (BANCOS)</td>
            </tr>
            <tr>
                <td colspan="5">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3) SECRETARIA MARINA &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 7) OTRA</td>
            </tr>
            <tr>
                <td colspan="5">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp4) SECRETARIA DE LA DEFENSA NACIONAL &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp( )</td>
            </tr>
            <tr>
                <td colspan="5">|</td>
            </tr>
            <tr>
                <td colspan="5">Bajo protesta de decir la verdad declaro que los datos aqui asentados son ciertos</td>
            </tr>
            <tr>
                <td colspan="5">|</td>
            </tr>
            <tr>
                <td colspan="5">|</td>
            </tr>
            <tr>
                <td colspan="5">|</td>
            </tr>
            <tr>
                <td colspan="2" align="Center">PLANTEL EDUCATIVO</td>
                <td colspan="3">FIRMA DEL ESTUDIANTE</td>
            </tr>
            <tr>
                <td colspan="5">|</td>
            </tr>
            <!---->
            <tr>
            <td colspan="2">
                <table border="1">
                    <tr>
                        <td>
                        <table>
                            <tr>
                                <td colspan="2"><strong>SE CERTIFICA QUE EL SOLICITANTE ES ESTUDIANTE </br>DE ESTE PLANTEL</strng></td>
                            </tr>
                            <tr>
                                <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbspSELLO</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="Center">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp FECHA &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  NOMBRE Y FIRMA DEL RESPONSABLE</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="3">
                <table border="1">
                    <tr>
                        <td>
                        <table>
                            <tr>
                                <td colspan="2" align="Center" ><strong>I.M.S.S. DELEGACION</strong></td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">SELLO</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="Center">&nbsp &nbsp &nbsp &nbspNOMBRE Y FIRMA DEL RESPONSABLE&nbsp &nbsp &nbsp &nbsp</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                </table>
            </td>
            </tr>
            <!---->
        </tr>
    </table>
        </td>
        </tr>
    </table>
