{{csrf_field()}}
<tr>
    <td>{{$student->applicant_id}}</td>
    <td><a href="/ats/student/{{$student->id}}/account/1">{{$student->first_name}}</a></td>
    <input type="hidden" name="student_id" value="{{$student->id}}">
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
            <td>"×"</td>
        @else
            <td>{{$score}}</td>
        @endif
    @endforeach
    <td>
        <ul>
            @foreach($student->notes as $item)
                <p>Stage: {{$item->stage}}, {{$item->user->name}} - {{$item->body}}</p>
            @endforeach
        </ul>
    </td>
</tr>
