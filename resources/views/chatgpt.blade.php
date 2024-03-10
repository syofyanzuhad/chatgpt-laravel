@extends('layouts.base')

@section('content')
    {{-- <div class="container"> --}}
        <div class="row">
            <div class="col-md-12 flex justify-center">
                <div class="text-center min-w-[50vw]">
                    <h1>ChatGPT</h1>
                    <div id="chatgpt" class="mt-5 border border-black p-3">
                        @if (isset($response))
                            <div class="mb-3">
                                <strong>You:</strong> {{ $prompt }}
                            </div>
                            <div class="mb-3">
                                <strong>ChatGPT:</strong> {{ $response }}
                            </div>
                        @endif

                        <form id="chatgpt-form" class="mb-3" action="{{ route('chatgpt.chat') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input name="prompt" type="text" class="form-control" id="chatgpt-input" placeholder="Type your message here...">

                                <button type="submit" class="btn btn-primary">Send</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
@endsection