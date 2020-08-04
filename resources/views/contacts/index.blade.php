@extends('layouts.app')

@section('content')

<div class="container">
    <div class='row'>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">お問い合わせ</div>
                <div class="panel-body">
                    {{-- エラーの表示 --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {!! Form::open(['url' => 'contact'/confirm', 'class' => "form-horizontal"]) !!}


                </div>

            </div>
        </div>
    </div>
</div>