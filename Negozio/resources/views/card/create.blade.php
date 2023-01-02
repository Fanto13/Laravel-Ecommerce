@extends('layouts.app')

@section('content')


<form action="{{URL::action('CardController@store')}}" method="post">
  @csrf
    <table align="center" cellpadding="2" cellspacing="2" border="2" bgcolor="white" width="40%">
            <tbody>
              <tr> 
              
                <td><label for="n_card">numero della carta</label></td>
                <td> <input type="text" class="form-control" id="n_card" name="n_card" placeholder="numero carta"></td>
               
              </tr>
              <tr> 
              
                <td> <label for="item_id">ccv</label></td>
                <td><input type="int" class="form-control" id="ccv" name="ccv" placeholder="3 cifre" maxlength="3"></td>
                  <input type="hidden" name="user_id" value="{{Auth::ID()}}" >
                </tr>

                
        
                
            </tr>
            <tr>
                <td>Tipo carta</td>
                <td><select name="tipocarta">
                    <option>Mastercard</option>
                    <option>American Express</option>
                    <option>Visa</option>
                    <option>Postepay</option>
                    </select></td>
            </tr>
            <tr>
                <td>Stato</td>
                <td><select name="stato">
                    <option>AD - Andorra</option>
                    <option>AE - Emirati Arabi Uniti</option>
                    <option>AF - Afghanistan</option>
                    <option>AG - Antigua e Barbuda</option>
                    <option>AI - Anguilla</option>
                    <option>AL - Albania</option>
                    <option>AM - Armenia</option>
                    <option>AO - Angola</option>
                    <option>AQ - Antartide</option>
                    <option>AR - Argentina</option>
                    <option>AS - Samoa americane</option>
                    <option>AT - Austria</option>
                    <option>AU - Australia</option>
                    <option>AW - Aruba</option>
                    <option>AZ - Azerbaigian</option>
                    <option>BA - Bosnia-Erzegovina</option>
                    <option>BB - Barbados</option>
                    <option>BD - Bangladesh</option>
                    <option>BE - Belgio</option>
                    <option>BF - Burkina Faso</option>
                    <option>BG - Bulgaria</option>
                    <option>BH - Bahrein</option>
                    <option>BI - Burundi</option>
                    <option>BJ - Benin</option>
                    <option>BL - Saint Barthelemy</option>
                    <option>BM - Bermuda</option>
                    <option>BN - Brunei</option>
                    <option>BO - Bolivia</option>
                    <option>BR - Brasile</option>
                    <option>BS - Bahamas, Le</option>
                    <option>BT - Bhutan</option>
                    <option>BV - Isola Bouvet</option>
                    <option>BW - Botswana</option>
                    <option>BY - Bielorussia</option>
                    <option>BZ - Belize</option>
                    <option>CA - Canada</option>
                    <option>CC - Isole Cocos (Keeling)</option>
                    <option>CD - Congo, Repubblica Democratica del</option>
                    <option>CF - Repubblica Centrafricana</option>
                    <option>CG - Congo, Repubblica del</option>
                    <option>CH - Svizzera</option>
                    <option>CI - Costa d'Avorio</option>
                    <option>CK - Isole Cook</option>
                    <option>CL - Cile</option>
                    <option>CM - Camerun</option>
                    <option>CN - Cina</option>
                    <option>CO - Colombia</option>
                    <option>CR - Costa Rica</option>
                    <option>CU - Cuba</option>
                    <option>CV - Capo Verde</option>
                    <option>CW - Curacao</option>
                    <option>CX - Isola di Natale</option>
                    <option>CY - Cipro</option>
                    <option>CZ - Repubblica Ceca</option>
                    <option>DE - Germania</option>
                    <option>DJ - Gibuti</option>
                    <option>DK - Danimarca</option>
                    <option>DM - Dominica</option>
                    <option>DO - Repubblica Dominicana</option>
                    <option>DZ - Algeria</option>
                    <option>EC - Ecuador</option>
                    <option>EE - Estonia</option>
                    <option>EG - Egitto</option>
                    <option>EH - Sahara Occidentale</option>
                    <option>ER - Eritrea</option>
                    <option>ES - Spagna</option>
                    <option>ET - Etiopia</option>
                    <option>FI - Finlandia</option>
                    <option>FJ - Fiji</option>
                    <option>FK - Isole Falkland (Malvine)</option>
                    <option>FM - Micronesia, Stati Federati di</option>
                    <option>FO - Isole Fær Øer</option>
                    <option>FR - Francia</option>
                    <option>FX - Francia metropolitana</option>
                    <option>GA - Gabon</option>
                    <option>GB - Regno Unito</option>
                    <option>GD - Grenada</option>
                    <option>GE - Georgia</option>
                    <option>GF - Guyana Francese</option>
                    <option>GG - Guernsey</option>
                    <option>GH - Ghana</option>
                    <option>GI - Gibilterra</option>
                    <option>GL - Groenlandia</option>
                    <option>GM - Gambia, Repubblica</option>
                    <option>GN - Guinea</option>
                    <option>GP - Guadalupa</option>
                    <option>GQ - Guinea Equatoriale</option>
                    <option>GR - Grecia</option>
                    <option>GS - Georgia del Sud e Isole Sandwich del Sud</option>
                    <option>GT - Guatemala</option>
                    <option>GU - Guam</option>
                    <option>GW - Guinea-Bissau</option>
                    <option>GY - Guyana</option>
                    <option>HK - Hong Kong</option>
                    <option>HM - Isole Heard e McDonald</option>
                    <option>HN - Honduras</option>
                    <option>HR - Croazia</option>
                    <option>HT - Haiti</option>
                    <option>HU - Ungheria</option>
                    <option>ID - Indonesia</option>
                    <option>IE - Irlanda</option>
                    <option>IL - Israele</option>
                    <option>IM - Isola di Man</option>
                    <option>IN - India</option>
                    <option>IO - Territorio britannico dell'Oceano Indiano</option>
                    <option>IQ - Iraq</option>
                    <option>IR - Iran</option>
                    <option>IS - Islanda</option>
                    <option selected="">IT - Italia</option>
                    <option>JE - Jersey</option>
                    <option>JM - Giamaica</option>
                    <option>JO - Giordania</option>
                    <option>JP - Giappone</option>
                    <option>KE - Kenya</option>
                    <option>KG - Kirghizistan</option>
                    <option>KH - Cambogia</option>
                    <option>KI - Kiribati</option>
                    <option>KM - Comore</option>
                    <option>KN - Saint Kitts e Nevis</option>
                    <option>KP - Corea del Nord</option>
                    <option>KR - Corea del Sud</option>
                    <option>KW - Kuwait</option>
                    <option>KY - Isole Cayman</option>
                    <option>KZ - Kazakistan</option>
                    <option>LA - Laos</option>
                    <option>LB - Libano</option>
                    <option>LC - Santa Lucia</option>
                    <option>LI - Liechtenstein</option>
                    <option>LK - Sri Lanka</option>
                    <option>LR - Liberia</option>
                    <option>LS - Lesotho</option>
                    <option>LT - Lituania</option>
                    <option>LU - Lussemburgo</option>
                    <option>LV - Lettonia</option>
                    <option>LY - Libia</option>
                    <option>MA - Marocco</option>
                    <option>MC - Monaco</option>
                    <option>MD - Moldavia</option>
                    <option>ME - Montenegro</option>
                    <option>MF - Saint Martin</option>
                    <option>MG - Madagascar</option>
                    <option>MH - Isole Marshall</option>
                    <option>MK - Macedonia</option>
                    <option>ML - Mali</option>
                    <option>MM - Birmania</option>
                    <option>MN - Mongolia</option>
                    <option>MO - Macao</option>
                    <option>MP - Isole Marianne Settentrionali</option>
                    <option>MQ - Martinica</option>
                    <option>MR - Mauritania</option>
                    <option>MS - Montserrat</option>
                    <option>MT - Malta</option>
                    <option>MU - Mauritius</option>
                    <option>MV - Maldive</option>
                    <option>MW - Malawi</option>
                    <option>MX - Messico</option>
                    <option>MY - Malesia</option>
                    <option>MZ - Mozambico</option>
                    <option>NA - Namibia</option>
                    <option>NC - Nuova Caledonia</option>
                    <option>NE - Niger</option>
                    <option>NF - Isola Norfolk</option>
                    <option>NG - Nigeria</option>
                    <option>NI - Nicaragua</option>
                    <option>NL - Paesi Bassi</option>
                    <option>NO - Norvegia</option>
                    <option>NP - Nepal</option>
                    <option>NR - Nauru</option>
                    <option>NU - Niue</option>
                    <option>NZ - Nuova Zelanda</option>
                    <option>OM - Oman</option>
                    <option>PA - Panama</option>
                    <option>PE - Perù</option>
                    <option>PF - Polinesia francese</option>
                    <option>PG - Papua Nuova Guinea</option>
                    <option>PH - Filippine</option>
                    <option>PK - Pakistan</option>
                    <option>PL - Polonia</option>
                    <option>PM - Saint-Pierre e Miquelon</option>
                    <option>PN - Isola di Pitcairn</option>
                    <option>PR - Porto Rico</option>
                    <option>PS - Striscia di Gaza</option>
                    <option>PS - Cisgiordania</option>
                    <option>PT - Portogallo</option>
                    <option>PW - Palau</option>
                    <option>PY - Paraguay</option>
                    <option>QA - Qatar</option>
                    <option>RE - Reunion</option>
                    <option>RO - Romania</option>
                    <option>RS - Serbia</option>
                    <option>RU - Russia</option>
                    <option>RW - Ruanda</option>
                    <option>SA - Arabia Saudita</option>
                    <option>SB - Isole Solomone</option>
                    <option>SC - Seychelles</option>
                    <option>SD - Sudan</option>
                    <option>SE - Svezia</option>
                    <option>SG - Singapore</option>
                    <option>SH - Sant'Elena, Ascensione e Tristan da Cunha</option>
                    <option>SI - Slovenia</option>
                    <option>SJ - Svalbard</option>
                    <option>SK - Slovacchia</option>
                    <option>SL - Sierra Leone</option>
                    <option>SM - San Marino</option>
                    <option>SN - Senegal</option>
                    <option>SO - Somalia</option>
                    <option>SR - Suriname</option>
                    <option>SS - Sud Sudan</option>
                    <option>ST - Sao Tome e Principe</option>
                    <option>SV - El Salvador</option>
                    <option>SX - Sint Maarten</option>
                    <option>SY - Siria</option>
                    <option>SZ - Swaziland</option>
                    <option>TC - Isole Turks e Caicos</option>
                    <option>TD - Ciad</option>
                    <option>TF - Terre australi e antartiche francesi</option>
                    <option>TG - Togo</option>
                    <option>TH - Tailandia</option>
                    <option>TJ - Tagikistan</option>
                    <option>TK - Tokelau</option>
                    <option>TL - Timor Est</option>
                    <option>TM - Turkmenistan</option>
                    <option>TN - Tunisia</option>
                    <option>TO - Tonga</option>
                    <option>TR - Turchia</option>
                    <option>TT - Trinidad e Tobago</option>
                    <option>TV - Tuvalu</option>
                    <option>TW - Taiwan</option>
                    <option>TZ - Tanzania</option>
                    <option>UA - Ucraina</option>
                    <option>UG - Uganda</option>
                    <option>UM - Isole Minori degli Stati Uniti</option>
                    <option>US - Stati Uniti</option>
                    <option>UY - Uruguay</option>
                    <option>UZ - Uzbekistan</option>
                    <option>VA - Santa Sede (Stato della Città del Vaticano)</option>
                    <option>VC - Saint Vincent e Grenadine</option>
                    <option>VE - Venezuela</option>
                    <option>VG - Isole Vergini britanniche</option>
                    <option>VI - Isole Vergini americane</option>
                    <option>VN - Vietnam</option>
                    <option>VU - Vanuatu</option>
                    <option>WF - Isole Wallis e Futuna</option>
                    <option>WS - Samoa</option>
                    <option>XK - Kosovo</option>
                    <option>YE - Yemen</option>
                    <option>YT - Mayotte</option>
                    <option>ZA - Sudafrica</option>
                    <option>ZM - Zambia</option>
                    <option>ZW - Zimbabwe</option>
                </select></td>
            </tr>
            <tr>
                <td>Regione</td>
                <td><input type="text" name="regione" size="30"></td>
            </tr>
            <tr>
                <td>Città/Provincia</td>
                <td><input type="text" name="citta" size="30"> / <input type="text" name="provincia" size="6" maxlength="2"></td>
            </tr>
            <tr>
                <td>Indirizzo spedizione</td>
                <td><input type="text" name="indirizzo" size="30" placeholder="luogo di consegna"></td>
            </tr>
            <tr>
                <td>Recapito telefonico</td>
                <td><input type="int" name="telefono" placeholder="telefono fisso" size="30"></td>
            </tr>
            <tr>
                <td>Cell. formato internazionale</td>
                <td><input type="int" placeholder="+..." size="12" input="" name="cellulare"></td>
            </tr>
            <tr>
                <td colspan="2">
                  {{-- <input type="submit" class="btn btn-primary float-right"> --}}
                  <class="btn btn-primary" type="submit" action='ordineeffettuato type='submit' value='Procedi''>
                   <input type="reset" value="Clear">
                  </td>
            </tr>
        </tbody>
      </table>
     
      <center> <a class="btn btn-primary" href="{{route('home')}}" role="button">Torna a<br> Home </a> </center>
    </form>

    <div class="msgBox" style="width: 50%;"><filedset id="fieldset"><center><form action='ordineeffettuato'><input type='submit' value='Vai'></form></fieldset></div>











{{-- <header>



</header>
  <div class="container-fluid">
      <header>
         
      </header>
      <div class="creditCardForm">
          <div class="heading">
              <h1>Conferma ordine</h1>
          </div>
          <div class="payment">
              <form>
                  <div class="form-group owner">
                      <label for="owner">Owner</label>
                      <input type="text" class="form-control" id="owner">
                  </div>
                  <div class="form-group CVV">
                      <label for="cvv">CVV</label>
                      <input type="text" class="form-control" id="cvv">
                  </div>
                  <div class="form-group" id="card-number-field">
                      <label for="cardNumber">Card Number</label>
                      <input type="text" class="form-control" id="cardNumber">
                  </div>
                  <div class="form-group" id="expiration-date">
                      <label>Expiration Date</label>
                      <select>
                          <option value="01">January</option>
                          <option value="02">February </option>
                          <option value="03">March</option>
                          <option value="04">April</option>
                          <option value="05">May</option>
                          <option value="06">June</option>
                          <option value="07">July</option>
                          <option value="08">August</option>
                          <option value="09">September</option>
                          <option value="10">October</option>
                          <option value="11">November</option>
                          <option value="12">December</option>
                      </select>
                      <select>
                          <option value="16"> 2016</option>
                          <option value="17"> 2017</option>
                          <option value="18"> 2018</option>
                          <option value="19"> 2019</option>
                          <option value="20"> 2020</option>
                          <option value="21"> 2021</option>
                          <option value="22"> 2022</option>
                      </select>
                  </div>
                  <div class="form-group" id="credit_cards">
                    <img src="images/assets/visa.jpg" id="visa">
                    <img src="images/assets/mastercard.jpg" id="mastercard">
                    <img src="images/assets/amex.jpg" id="amex">
                  </div>
                  <div class="form-group" id="pay-now">
                      <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                  </div>
              </form>
          </div>
      </div> --}}

      {{-- <div class="examples">
          <div class="table-responsive">
              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th>Type</th>
                          <th>Card Number</th>
                          <th>Security Code</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Visa</td>
                          <td>4716108999716531</td>
                          <td>257</td>
                      </tr>
                      <tr>
                          <td>Master Card</td>
                          <td>5281037048916168</td>
                          <td>043</td>
                      </tr>
                      <tr>
                          <td>American Express</td>
                          <td>342498818630298</td>
                          <td>3156</td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div> --}}
  {{-- </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.payform.min.js" charset="utf-8"></script>
  <script src="assets/js/script.js"></script>
</body>
 <table class="table table-hover">
   --}}

 

@endsection