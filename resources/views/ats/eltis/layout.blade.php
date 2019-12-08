@extends('layouts.app')

<!-- Main Content -->
@section('content')
    <div class="row">
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/ats/eltis/">Stacks</a></li>
                <li><a href="/ats/eltis/result/publish">Get Publishable Result</a></li>
                <li><a href="/ats/eltis/backup">Backup</a></li>
                <li><a href="/ats/eltis/score_sheet">ELTiS Score Sheet</a></li>
                <li><a href="/ats/eltis/in_class_essary_score_sheet">In Class Essay - Score Sheet</a></li>
                <li><a href="/ats/eltis/id_card">ID Card</a></li>
                <li><a href="/ats/eltis/letter">Letter</a></li>
                <li><a href="/ats/eltis/envelope">Envelope</a></li>
                <li><a href="/ats/eltis/attendance">Attendance</a></li>
                <li><a href="/ats/eltis/registration">Registration</a></li>
                <li><a href="/ats/eltis/sit_sticker">Sit Sticker</a></li>
                <li><a href="/ats/eltis/score_now">Score Now!</a></li>
            </ul>
        </div>
        <div class="col-md-9">
            @yield('eltis_content')
        </div>
    </div>
@endsection
