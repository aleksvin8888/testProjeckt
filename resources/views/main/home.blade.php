@extends('layouts.app')

@section('content')

    <div class="container  overflow-hidden">
        <div class="row y-5">
            <table class="table table-success table-striped">
                <thead>
                <tr>
                    <th>##</th>
                    <th>Навыки</th>
                    <th>Учебные завидения</th>
                </tr>
                </thead>
                <tbody>
                @foreach($professions as $profession)
                    <tr>
                        <td>{{$profession->title}}</td>
                        <td>
                            <ul class="list-group list-group-flush">
                                @foreach($profession->skills as $skill)
                                <li class="list-group-item">{{$skill->title}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <ul class="list-group list-group-flush">
                                @foreach($profession->educationalInstitutions as $institution)
                                    <li class="list-group-item">{{$institution->title}}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>




@endsection
