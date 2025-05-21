{{5+2}}

<br><br><br>

{{"NUML University"}}

{!!"<h1>Web Programming</h1>"!!}

{!!"<script>alert('This is javascript')</script>"!!}

@php
    $car=["Mercedes","Volvo","Toyota","Honda"];
@endphp
<ul>
    @foreach($car as $cars)
        <li>{{$cars}}</li>
    @endforeach
</ul>