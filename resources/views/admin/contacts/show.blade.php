@extends('admin.layouts.base')

@section('title', 'お問い合わせ一覧')
@section('web-active' , 'active')

@include('admin.layouts.sub')
@include('admin.layouts.header')
@section('content')

<div class="main-contet-inner">
    <div class="page-ttl_ar">
        <h1 class="page-ttl">お問い合わせ一覧</h1>
    </div>
    <div class="list-contents">
        <div class="table_ar">
            <table class="list-table">
                <thead>
                    <tr>
                        <th style="width: 20px">
                            <p>編集</p>
                        </th>
                        <th style="width: 20px">
                            <p>削除</p>
                        </th>
                        <th style="width: 50px">
                            <p>ステータス</p>
                        </th>
                        <th style="width: 80px">
                            <p>対応者</p>
                        </th>
                        <th style="width: 80px">
                            <p>会社名</p>
                        </th>
                        <th style="width: 50px">
                            <p>氏名</p>
                        </th>
                        <th style="width: 70px">
                            <p>電話番号</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="edit-icon">
                            <p><a class="tooltip" title="編集する" href="" ><i class="fas fa-edit"></i></a></p>
                        </td>
                        <td class ="edit-icon">
                        {{-- 管理者ユーザー以外削除可能 --}}
                        <p class="delete-btn tooltip" title="削除する" data-id=""><i class="fas fa-trash"></i></p>
                        </td>
                        <td>
                            <p></p>
                        </td>
                        <td>
                            <p></p>
                        </td>
                        <td>
                            <p></p>
                        </td>
                        <td>
                            <p></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="pager-wrapper bottom">
        <div class="pager_ar">
            <p class="search-result"></p>
        </div>
    </div>
</div>
@endsection

@section('pageJs')
@endsection
