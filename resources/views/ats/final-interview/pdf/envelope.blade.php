
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
    <body>

        @foreach($students as $student)

        <div>
            <b>{{$student->first_name}} {{$student->last_name}},</b> Serial: {{$student->final_id}}, School Name: {{$student->schoolName}}<br>
            Mailing Address: {{$student->address}}, {{$student->thana}}, {{$student->district}} - {{$student->postalCode}}<br>
            Contact Number: {{$student->contact}}   {{$student->fatherContact}}    {{$student->motherContact}}
        </div>
            <hr>
        @endforeach
    </body>
</html>
