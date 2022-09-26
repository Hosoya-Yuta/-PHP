@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            {{-- <div>{{$items}}</div> --}}
            <div>{{$test_1}}</div>
            <table>
                <tr>
                    <th>店舗名</th>
                    <th>場所</th>
                    <th>口コミ</th>
                </tr>
                {{-- @foreach($items->$item) --}}
                <tr>
                    {{-- <td>{{$items->}}</td> --}}
                </tr>
                {{-- @endforeach --}}
            </table>
        </div>
    </div>
</div>
@endsection
