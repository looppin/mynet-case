@extends('backend.layout')
@section('title','Kişi Düzenle | Admin')
@section('content')
    @php $name = explode(" ",$person->name); @endphp
    <div class="content-wrapper">
        <div class="row">

            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kişiyi Düzenle</h4>
                        <form class="form-sample" action="{{route('person.update',[$person->id])}}" method="POST" enctype="multipart/form-data">
                            @CSRF
                            @method('put')
                            <p class="card-description">
                                Kişisel Bilgiler
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">İsim</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="firstName" value="{{ isset($name[2]) ? $name[0]." ".$name[1] : $name[0] }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Soyisim</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="secondName" value="{{ isset($name[2]) ? $name[2] : $name[1] }}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Cinsiyet</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="gender">
                                                <option value="Man" {{ $person->gender == "Man" ? "selected" : "" }}>Erkek</option>
                                                <option value="Woman" {{ $person->gender == "Woman" ? "selected" : "" }}>Kadın</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Doğum Tarihi</label>
                                        <div class="col-sm-9">
                                            <input type="date"  class="form-control" placeholder="gg/aa/yyyy" name="birthday" value="@php echo date('Y-m-d', strtotime($person->birthday)) @endphp"/>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <p class="card-description">
                                Adres Bilgileri
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Adres</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" name="firstAddress">{{$address->address}}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Posta Kodu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="postcode" name="postcode" value="{{ $address->post_code }}"/>
                                            <label for="postcode">Bu alanda doğrulama vardır. Lütfen geçerli bir posta kodu giriniz.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">İl</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="city" value="{{ $address->city_name }}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Ülke</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="country">
                                                <option value="Türkiye">Türkiye</option>
                                                <option value="ABD Virgin Adaları">ABD Virgin Adaları</option>
                                                <option value="Almanya">Almanya</option>
                                                <option value="Amerika Birleşik Devletleri">Amerika Birleşik Devletleri</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Antigua ve Barbuda">Antigua ve Barbuda</option>
                                                <option value="Arjantin">Arjantin</option>
                                                <option value="Arnavutluk">Arnavutluk</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Avustralya">Avustralya</option>
                                                <option value="Avusturya">Avusturya</option>
                                                <option value="Azerbaycan">Azerbaycan</option>
                                                <option value="Bahama">Bahama</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahreyn">Bahreyn</option>
                                                <option value="Bangladeş">Bangladeş</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belçika">Belçika</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Beyaz Rusya">Beyaz Rusya</option>
                                                <option value="Birleşik Arap Emirlikleri">Birleşik Arap Emirlikleri</option>
                                                <option value="Bolivya">Bolivya</option>
                                                <option value="Bosna Hersek">Bosna Hersek</option>
                                                <option value="Brezilya">Brezilya</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaristan">Bulgaristan</option>
                                                <option value="Burma">Burma</option>
                                                <option value="Cebelitarık">Cebelitarık</option>
                                                <option value="Çek Cumhuriyeti">Çek Cumhuriyeti</option>
                                                <option value="Çin">Çin</option>
                                                <option value="Danimarka">Danimarka</option>
                                                <option value="Dominik Cumhuriyeti">Dominik Cumhuriyeti</option>
                                                <option value="Ekvator">Ekvator</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Endonezya">Endonezya</option>
                                                <option value="Eritre">Eritre</option>
                                                <option value="Ermenistan">Ermenistan</option>
                                                <option value="Estonya">Estonya</option>
                                                <option value="Fas">Fas</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Filipinler">Filipinler</option>
                                                <option value="Finlandiya">Finlandiya</option>
                                                <option value="Fransa">Fransa</option>
                                                <option value="Fransız Polinezyası">Fransız Polinezyası</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadalup">Guadalup</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Güney Afrika">Güney Afrika</option>
                                                <option value="Gürcistan">Gürcistan</option>
                                                <option value="Hırvatistan">Hırvatistan</option>
                                                <option value="Hindistan">Hindistan</option>
                                                <option value="Hollanda">Hollanda</option>
                                                <option value="Hollanda Antilleri">Hollanda Antilleri</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="İngiliz Virginia Adaları">İngiliz Virginia Adaları</option>
                                                <option value="İngiltere">İngiltere</option>
                                                <option value="İrlanda">İrlanda</option>
                                                <option value="İspanya">İspanya</option>
                                                <option value="İsrail">İsrail</option>
                                                <option value="İsveç">İsveç</option>
                                                <option value="İsviçre">İsviçre</option>
                                                <option value="İtalya">İtalya</option>
                                                <option value="İzlanda">İzlanda</option>
                                                <option value="Jamaika">Jamaika</option>
                                                <option value="Japonya">Japonya</option>
                                                <option value="Kamboçya">Kamboçya</option>
                                                <option value="Kanada">Kanada</option>
                                                <option value="Katar">Katar</option>
                                                <option value="Kayman Adaları">Kayman Adaları</option>
                                                <option value="Kıbrıs">Kıbrıs</option>
                                                <option value="Kolombiya">Kolombiya</option>
                                                <option value="Kore">Kore</option>
                                                <option value="Kosta Rika">Kosta Rika</option>
                                                <option value="Kuveyt">Kuveyt</option>
                                                <option value="Küba">Küba</option>
                                                <option value="Letonya">Letonya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Litvanya">Litvanya</option>
                                                <option value="Lübnan">Lübnan</option>
                                                <option value="Lüksemburg">Lüksemburg</option>
                                                <option value="Macaristan">Macaristan</option>
                                                <option value="Makedonya">Makedonya</option>
                                                <option value="Maldivler">Maldivler</option>
                                                <option value="Malezya">Malezya</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Meksika">Meksika</option>
                                                <option value="Mısır">Mısır</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monako">Monako</option>
                                                <option value="Mozambik">Mozambik</option>
                                                <option value="Nikaragua">Nikaragua</option>
                                                <option value="Norveç">Norveç</option>
                                                <option value="Özbekistan">Özbekistan</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Polonya">Polonya</option>
                                                <option value="Portekiz">Portekiz</option>
                                                <option value="Porto Riko">Porto Riko</option>
                                                <option value="Romanya">Romanya</option>
                                                <option value="Rusya">Rusya</option>
                                                <option value="Saint Kitts ve Nevis">Saint Kitts ve Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seyşel">Seyşel</option>
                                                <option value="Singapur">Singapur</option>
                                                <option value="Slovakya">Slovakya</option>
                                                <option value="Slovenya">Slovenya</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Suriye">Suriye</option>
                                                <option value="Suudi Arabistan">Suudi Arabistan</option>
                                                <option value="Şili">Şili</option>
                                                <option value="Tayland">Tayland</option>
                                                <option value="Tayvan">Tayvan</option>
                                                <option value="Tunus">Tunus</option>
                                                <option value="Turks ve Caicos Adaları">Turks ve Caicos Adaları</option>
                                                <option value="Ukrayna">Ukrayna</option>
                                                <option value="Umman">Umman</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Ürdün">Ürdün</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Yeni Zelanda">Yeni Zelanda</option>
                                                <option value="Yunanistan">Yunanistan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Kayıt Et</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('css') @endsection
@section('js')

    <script>
        jQuery(document).ready(function() {
            $("#date").inputmask({"mask": "99/99/9999"});
        });
    </script>
@endsection
