@extends('layouts.front_profile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                 <h1>プロフィール</h1>
                    @if (!is_null($posts))
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-10">
                            <p type="text" class="form-control" name="name">{{ $posts->name }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            <p  type="text" class="form-control" name="gender">{{ $posts->gender }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        <div class="col-md-10">
                            <p class="form-control" name="hobby">{{ str_limit($posts->hobby,140) }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介</label>
                        <div class="col-md-10">
                            <p class="form-control" name="introduction">{{ str_limit($posts->introduction,140) }}</p>
                        </div>
                    </div>
                    @endif
            </div>
        </div>
    </div>
@endsection