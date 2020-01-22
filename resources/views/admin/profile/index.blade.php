@extends('layouts.admin')
@section('title', 'Myプロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Myプロフィール</h2>
        </div>

        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">名前</th>
                                <th width="10%">性別</th>
                                <th width="10%">趣味</th>
                                <th width="30%">自己紹介欄</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <td>{{ \Str::limit($profile->name, 15) }}</td>
                                    <td>{{ \Str::limit($profile->gender, 10) }}</td>
                                    <td>{{ \Str::limit($profile->hobby, 10) }}</td>
                                    <td>{{ \Str::limit($profile->introduction, 20) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{action('Admin\ProfileController@edit',['id' => $profile->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{action('Admin\ProfileController@delete', ['id' => $profile->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection