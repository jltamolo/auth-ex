@extends('layouts.layout')

@section('content')
<div class="wrapper">
    <div class="center">
    <img id="left" src="{{ asset('img/arms.png') }}">
        <img id="right" src="{{ asset('img/ksg.png') }}"><br/><br/><br/>
            <h1>KENYA SCHOOL OF GOVERNMENT</h1>
            <h3>Online Certificate Verification</h3>
            <h4 class="cert_no">Certficate no:</h4>
            <p>This is to Certify that</p>
            <p class="part-name"><strong>Jane Maria Doe</strong></p>
            <p>Has attended <strong>Senior Management Course </strong>at Kenya School of Government and successfully passed the Course on <strong>17th December 2020</strong></p>
            <br />
            <button type="submit" name="print_btn" class="n">PRINT </button>
            <button type="submit" name="download_btn" class="">DOWNLOAD </button>

           
</div>
</div>
@endsection