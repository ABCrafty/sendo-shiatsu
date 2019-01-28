@extends('layouts.front-layout')

@section('title')
    Do-In - @parent
@endsection


@section('content')

    @php($paragraphs1 = '')
    @php($paragraphs2 = '')
    @php($paragraphs3 = '')

    <div class="container doin">
        <div class="row">
            <div class="col-md-9">
                <div class="presentation">
                    <h3>{{ $doin->first_paragraph_title }}</h3>
                    <div class="paragraph-presentation">
                        @foreach(explode("\n", $doin->first_paragraph_content) as $line)
                            @if (trim($line))
                                {!! $paragraphs1 .= '<p>' . $line . '</p>' !!}
                            @endif
                        @endforeach
                    </div>
                    <div class="paragraph-presentation">
                        <h3>{{ $doin->second_paragraph_title }}</h3>
                        @foreach(explode("\n", $doin->second_paragraph_content) as $line)
                            @if (trim($line))
                                {!! $paragraphs2 .= '<p>' . $line . '</p>' !!}
                            @endif
                        @endforeach
                    </div>
                    <div class="paragraph-presentation">
                        <h3>{{ $doin->third_paragraph_title }}</h3>
                        @foreach(explode("\n", $doin->third_paragraph_content) as $line)
                            @if (trim($line))
                                {!! $paragraphs3 .= '<p>' . $line . '</p>' !!}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3 aside">
                <div class="illustration">
                    <img src="{{ $doin->image }}" alt="{{ basename($doin->image) }}">
                </div>

                <div class="wellness-list">
                    <ul>
                        @foreach(explode("\n", $doin->wellness) as $line)
                            <li>{{ $line }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="link text-center">
                    <a class="btn btn-custom-green">Prendre rendez-vous</a>
                </div>

            </div>
        </div>
    </div>
@endsection