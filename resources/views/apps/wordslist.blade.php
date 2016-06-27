@extends('partials.contentdisplay')

@section('title', 'Shit Generator - WordList')

@section('content')
    <div class="row">
        <table class="striped grey" id="wordsTable">
            <thead>
            <th data-field="id">Word</th>
            <th data-field="Word">Type</th>
            <th data-field="Count">Count</th>
            </thead>
            @foreach ($words as $word)
                <tr>
                    <td class="hide-on-small-only">
                        <p>{!! $word->word !!}</p>
                    </td>
                    <td>
                        <p>{!! $word->type !!}</p>
                    </td>
                    <td>
                        <p>{!! $word->count !!}</p>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="row">
        <div class="center-align">
            {!! $words->render() !!}
        </div>
    </div>
@endsection