@extends('layouts.front-layout')

@section('title')
    Shiatsu - @parent
@endsection


@section('content')

    <div class="container shiatsu">
        <div class="row">
            <div class="col-md-9">
                <div class="presentation">
                    <h3>{{ $shiatsu->first_paragraph_title }}</h3>
                    <div class="paragraph-presentation">
                        @foreach(explode("\n", $shiatsu->first_paragraph_content) as $i => $line)
                            @if (trim($line))
                                {!!'<p>' . $line . '</p>' !!}
                            @endif
                        @endforeach
                    </div>
                    <div class="paragraph-presentation">
                        <h3>{{ $shiatsu->second_paragraph_title }}</h3>
                        @foreach(explode("\n", $shiatsu->second_paragraph_content) as $line)
                            @if (trim($line))
                                {!! '<p>' . $line . '</p>' !!}
                            @endif
                        @endforeach
                    </div>
                    <div class="paragraph-presentation">
                        <h3>{{ $shiatsu->third_paragraph_title }}</h3>
                        @foreach(explode("\n", $shiatsu->third_paragraph_content) as $line)
                            @if (trim($line))
                                {!! '<p>' . $line . '</p>' !!}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3 aside">
                <div class="illustration">
                    <img src="{{ $shiatsu->image }}" alt="{{ basename($shiatsu->image) }}">
                </div>

                <div class="wellness-list">
                    <ul>
                    @foreach(explode("\n", $shiatsu->wellness) as $line)
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