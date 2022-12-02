@extends('layouts.app-master')

@section('title')
Контакты
@endsection

@section('content')


    
    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
                Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>
    <!-- End Content Page -->
    <!-- Start Map -->
    <div id="mapid" style="width: 100%; height: 300px;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script>
        var mymap = L.map('mapid').setView([-23.013104, -43.394365, 13], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Zay Telmplte | Template Design by <a href="https://templatemo.com/">Templatemo</a> | Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        L.marker([-23.013104, -43.394365, 13]).addTo(mymap)
            .bindPopup("<b>Zay</b> eCommerce Template<br />Location.").openPopup();

        mymap.scrollWheelZoom.disable();
        mymap.touchZoom.disable();
    </script>
    <!-- End Map -->
    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="POST" role="form" action="{{ route('contact.add') }}">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Имя*</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Имя">
                        @if($errors->has('name'))
                            <span class="text-danger text-left fs-6">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email*</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                        @if($errors->has('email'))
                            <span class="text-danger text-left fs-6">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Тема*</label>
                    <select name="subject_id" id="subject" class="form-select">
                        <option style="display:none" selected disabled></option>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject['id'] }}">{{ $subject['title']}}</option>   
                        @endforeach
                    </select>
                    @if($errors->has('subject_id'))
                        <span class="text-danger text-left fs-6">{{ $errors->first('subject_id') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Текст*</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Текст" rows="8"></textarea>
                    @if($errors->has('message'))
                        <span class="text-danger text-left fs-6">{{ $errors->first('message') }}</span>
                    @endif
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Отправить</button>
                    </div>
                </div>
                @csrf
            </form>
        </div>
    </div>
    <!-- End Contact -->
@endsection