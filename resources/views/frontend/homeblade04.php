@extends('layouts.frontendlayout')
@section('content')

<div class="page-banner">
    <div class="page-banner-inr">
        <div class="banner-img">
            <img src="{{url('/')}}/assets/images/page-banner.jpg" alt="">
        </div>
        <div class="banner-heading">
            <h2> {{$names}}</h2>
        </div>

    </div>
</div>

<div class="expertise-content">
    <div class="container">
        <div class="row">
            <div class="expertise-inr">
                <div class="expertise-heading">

                </div>
                <div class="expertise-content">
                    <div class="row">
                        <div class="col-md-7 noPadding">
                            <div class="cascode-first">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Find the correct CAS code</h4>


                                        <div class="form-group">
                                            <label>Choose expertise area</label>
                                            <ul class="d-flex ">

                                                @foreach($exp as $ex)

                                                <li onclick="myFunction(<?php echo $ex->id; ?>,'<?php echo htmlspecialchars($ex->description, ENT_QUOTES); ?>','<?php echo $ex->name; ?>',this)" data_id="{{$ex->id}}">{{$ex->name}}</li>
                                                @endforeach

                                            </ul>
                                            <label>Choose a diagnosis</label>
                                            <select class="form-control select2 changedata" id="mylist" name="expertise">
                                                <option value="" disabled selected>Choose a diagnosis ...</option>
                                                @foreach($opt as $option)
                                                <optgroup label="{{$option->name}}">
                                                    @foreach($shorts as $short)

                                                    @if($option->id == $short->opt_id)
                                                    <option ex_id="{{$short->opt_id}}" short_id="{{$short->id}}" short_d="{{$short->description}}" value="{{$short->short_code}}">{{$short->short_code}} {{$short->value}}</option>
                                                    @endif

                                                    @endforeach

                                                </optgroup>

                                                @endforeach


                                            </select>
                                            <div class="loader" style="display: none;">
                                                <div class="LoaderBalls">
                                                    <div class="LoaderBalls__item"></div>
                                                    <div class="LoaderBalls__item"></div>
                                                    <div class="LoaderBalls__item"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <h4>Code</h4>
                                        <div class="code-list">

                                            <input type="text" class="" name="codeAndDiagnose" id="codeAndDiagnose" value="" readonly>

                                            <button class="btn-blue" onclick="copyCode('codeAndDiagnose')">
                                                <img src="{{url('/')}}/assets/images/feather-copy.png" alt="copy">
                                            </button>
                                        </div>
                                        <div class="code-list">
                                            <input class="short_code" type="text" id="code" name="code" value="" readonly>
                                            <button class="btn-blue" onclick="copyCode('code')">
                                                <img src="{{url('/')}}/assets/images/feather-copy.png" alt="copy">
                                            </button>
                                        </div>
                                        <div class="code-list">
                                            <input type="text" class="" name="diagnose" id="diagnose" value="" readonly>
                                            <button class="btn-blue" onclick="copyCode('diagnose')">
                                                <img src="{{url('/')}}/assets/images/feather-copy.png" alt="copy">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cascode-second">
                                <h4>Find the correct CAS code</h4>
                                <ul>
                                    <li>Kies een diagnose door op de 'selectie / keuze' balk te klikken</li>
                                    <li>Voer vervolgens enkele beginletters van de diagnose in het tekstveld in.</li>
                                    <li>In de onderstaande tekstvelden ziet u de samengestelde code en diagnose, de code en
                                        diagnose afzonderlijk</li>
                                    <li>Klik op het gewenste 'kopieer'-icoon om de code en diagnose, code of gewoon diagnose te kopiÃ«ren</li>
                                    <li>U kunt nu de gekopieerde code en / of diagnose 'plakken' in uw rapport</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 noPadding">
                            <h4>Toelichting</h4>
                            <div class="diagnose-dtl-heading">
                                <h5 id="expertname">Geen diagnosis gekozen</h5>
                            </div>
                            <div id="short_d">

                            </div>
                            <div id="description" class="diagnose-dtl-list">

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
