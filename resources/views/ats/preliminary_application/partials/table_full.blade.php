<table class="table table-hover table-bordered table-striped table-responsive table-sm">
    <thead>
    <tr>
        <td>Application ID</td>
        <td>first_name</td>
        <td>aboutCommunityWork</td>
        <td>aboutYourself</td>
        <td>address</td>
        <td>ageOnFirstAugust</td>
        {{-- <td>applicant_id</td> --}}
        <td>birthCertificate</td>
        <td>citizenship</td>
        <td>classCurrentlyStudying</td>
        <td>classStudiedIn20142015</td>
        <td>classStudiedIn20152016</td>
        <td>contact</td>
        <td>currentPercentageMarks</td>
        <td>date_of_birth</td>
        <td>district</td>
        <td>email</td>
        <td>facebookURL</td>
        <td>familyGreenCard</td>
        <td>familyImmigration</td>
        <td>familyLivingInUSA</td>
        <td>fatherContact</td>
        <td>fatherEmailID</td>
        <td>fatherFirstName</td>
        <td>fatherLastName</td>
        <td>fatherMiddleName</td>
        <td>fatherOccupation</td>
        <td>fatherOfficePhone</td>
        <td>holdUSVisa</td>
        <td>holdUSVisaExpiry</td>
        <td>instagramID</td>
        <td>last_name</td>
        <td>middle_name</td>
        <td>motherContact</td>
        <td>motherEmailID</td>
        <td>motherFirstName</td>
        <td>motherLastName</td>
        <td>motherMiddleName</td>
        <td>motherOccupation</td>
        <td>percentageMarksIn20142015</td>
        <td>percentageMarksIn20152016</td>
        <td>photo</td>
        <td>note</td>
        <td>postalCode</td>
        <td>relativesLivingInUSA</td>
        <td>relativesLivingInUSAState</td>
        <td>schoolAddress</td>
        <td>schoolName</td>
        <td>created_at</td>
        <td>schoolPhone</td>
        <td>sex</td>
        <td>status</td>
        <td>thana</td>
        <td>transcript2014</td>
        <td>transcript2015</td>
        <td>transcriptCurrent</td>
        <td>twitterHandle</td>
        <td>visitedUS5</td>
        <td>visitedUS5HowLong</td>
        <td>visitedUS5Purpose</td>
        <td>visitedUS5WhenAndWhere</td>
        <td>motherOfficePhone</td>
        <td>updated_at</td>
        <td>Is Access Student</td>
        @foreach($criterion as $criteria)
            <td>{{$criteria->label}} </td>
        @endforeach
        <td>Notes</td>
    </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        {{csrf_field()}}
        <tr>
            {{-- <td>{{$student->id}}</td> --}}
            <td>{{20210000 + $student->applicant_id +2}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->aboutCommunityWork}}</td>
            <td>{{$student->aboutYourself}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->ageOnFirstAugust}}</td>
            {{-- <td>{{20210000 + $student->applicant_id +2}}</td> --}}
            <td>{{$student->birthCertificate}}</td>
            <td>{{$student->citizenship}}</td>
            <td>{{$student->classCurrentlyStudying}}</td>
            <td>{{$student->classStudiedIn20142015}}</td>
            <td>{{$student->classStudiedIn20152016}}</td>
            <td>{{$student->contact}}</td>
            <td>{{$student->currentPercentageMarks}}</td>
            <td>{{$student->date_of_birth}}</td>
            <td>{{$student->district}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->facebookURL}}</td>
            <td>{{$student->familyGreenCard}}</td>
            <td>{{$student->familyImmigration}}</td>
            <td>{{$student->familyLivingInUSA}}</td>
            <td>{{$student->fatherContact}}</td>
            <td>{{$student->fatherEmailID}}</td>
            <td>{{$student->fatherFirstName}}</td>
            <td>{{$student->fatherLastName}}</td>
            <td>{{$student->fatherMiddleName}}</td>
            <td>{{$student->fatherOccupation}}</td>
            <td>{{$student->fatherOfficePhone}}</td>
            <td>{{$student->holdUSVisa}}</td>
            <td>{{$student->holdUSVisaExpiry}}</td>
            <td>{{$student->instagramID}}</td>
            <td>{{$student->last_name}}</td>
            <td>{{$student->middle_name}}</td>
            <td>{{$student->motherContact}}</td>
            <td>{{$student->motherEmailID}}</td>
            <td>{{$student->motherFirstName}}</td>
            <td>{{$student->motherLastName}}</td>
            <td>{{$student->motherMiddleName}}</td>
            <td>{{$student->motherOccupation}}</td>
            <td>{{$student->percentageMarksIn20142015}}</td>
            <td>{{$student->percentageMarksIn20152016}}</td>
            <td>{{$student->photo}}</td>
            <td>{{$student->note}}</td>
            <td>{{$student->postalCode}}</td>
            <td>{{$student->relativesLivingInUSA}}</td>
            <td>{{$student->relativesLivingInUSAState}}</td>
            <td>{{$student->schoolAddress}}</td>
            <td>{{$student->schoolName}}</td>
            <td>{{$student->created_at}}</td>
            <td>{{$student->schoolPhone}}</td>
            <td>{{$student->sex}}</td>
            <td>{{$student->status}}</td>
            <td>{{$student->thana}}</td>
            <td>{{$student->transcript2014}}</td>
            <td>{{$student->transcript2015}}</td>
            <td>{{$student->transcriptCurrent}}</td>
            <td>{{$student->twitterHandle}}</td>
            <td>{{$student->visitedUS5}}</td>
            <td>{{$student->visitedUS5HowLong}}</td>
            <td>{{$student->visitedUS5Purpose}}</td>
            <td>{{$student->visitedUS5WhenAndWhere}}</td>
            <td>{{$student->motherOfficePhone}}</td>
            <td>{{$student->updated_at}}</td>
            <td>{{$student->is_access_student}}</td>
            @foreach($criterion as $criteria)
                @php
                    $criteriawise_score = \App\CriteriawiseScore::where('student_id', $student->id)->where('criteria_id', $criteria->id)->where('score_account_id', $account)->first();
                    if($criteriawise_score){
                    $score = $criteriawise_score->score;
                    }else{
                    $score = 0;
                    }
                @endphp
            @if($score==0)
                    <td>No</td>
                @else
                    <td>{{$score}}</td>
                @endif
            @endforeach
            <td>
                <ul>
                    @foreach($student->notes as $item)
                        <p>{{$item->user->name}} - {{$item->body}}</p>
                    @endforeach
                </ul>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>