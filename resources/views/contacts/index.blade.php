@extends('layouts.contact')
@section('title','お問い合わせ')
@section('content')

<form method="POST" action="{{ route('contact_confirm') }}">
    @csrf
    <input type="hidden" name="status" value="1">
    <div class="Form">
        
        @if($errors->any())
            <div class="alert-danger">エラーがあります</div>
        @endif
        
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <span class="Form-Item-Label-Required">必須</span>お問い合わせ種別
            </p>

            <div>
                <div>
                    
                    @foreach( $inquiry_types as $key => $value )
                        <input type="checkbox" name="inquiry_type[]" id="hoge" value="" class="form-check-input" >
                        <label for="hoge" class="ck-box check-wrapper" >{{ $value }}</label>
                        @if( $errors->has( 'inpuiry_type' ) )
                            <li>{{ $errors->first('inquiry_type') }}</li>
                        @endif
                    @endforeach
                </div>
                <div class="Form-Item-Error"> 
                </div>
            </div>

        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <span class="Form-Item-Label-Required">必須</span>会社名
            </p>
            <div>
                <div>
                    <input name="company_name" value ="{{ old('company_name') }}" type="text" class="Form-Item-Input" placeholder="例）株式会社〇〇">
                </div>
                <div class="Form-Item-Error">
                    @if( $errors->has('inpuiry_type') )
                        <li>{{ $errors->first('company') }}</li>
                    @endif
                </div>
            </div>
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <span class="Form-Item-Label-Required">必須</span>氏名
            </p>
            <div>
                <div>
                    <input name="user_name" value ="{{ old('user_name') }}" type="text" class="Form-Item-Input" placeholder="例）山田太郎">
                </div>
                <div class="Form-Item-Error">
                    @if($errors->has('user_name'))
                        <li>{{ $errors->first('user_name') }}</li>
                    @endif
                </div>
            </div>
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <span class="Form-Item-Label-Required">必須</span>電話番号
            </p>
            <div>
                <div>
                    <input name="tele_num" value ="{{ old('tele_num') }}" type="tel" class="Form-Item-Input" placeholder="例）000-0000-0000">
                </div>
                <div class="Form-Item-Error">
                    @if($errors->has('tele_num'))
                        <li>{{ $errors->first('tele_num') }}</li>
                    @endif
                </div>
            </div>
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <span class="Form-Item-Label-Required">必須</span>メールアドレス
            </p>
            <div>
                <div>
                    <input name="email" value ="{{ old('email') }}" type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
                </div>
                <div class="Form-Item-Error">
                    @if($errors->has('email'))
                        <li>{{ $errors->first('email') }}</li>
                    @endif
                </div>
            </div>
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <span class="Form-Item-Label-Required">必須</span>生年月日
            </p>
            <div>
                <div>
                    <input class="Select" type="text" name="birthday" value ="{{ old('birthday') }}" id ='birthday'>
                </div>
                <div class="Form-Item-Error">
                    @if($errors->has('birthday'))
                        <li>{{ $errors->first('birthday') }}</li>
                    @endif
                </div>
            </div>
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <span class="Form-Item-Label-Required">必須</span>性別
            </p>
            <div>
                <div class = "radio">   
                    @foreach($sex as $key => $value)
                        <label>
                            <input type="radio" name="sex" value="{{ $key }}" {{ old('sex') == $key ? 'checked' : '' }}>{{ $value }}
                        </label>
                    @endforeach
                </div>
                <div class="Form-Item-Error">
                    @if($errors->has('sex'))
                        <li>{{ $errors->first('sex') }}</li>
                    @endif
                </div>
            </div>
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <span class="Form-Item-Label-Required">必須</span>職業
            </p>
            <div>
                <div>
                    <select name="job" class="Select">
                        <option value="">職業を選択してください</option>
                        @foreach($job as $key => $value)
                            <option value="{{ $key }}" {{ old('job') == $key ? 'selected' : ''}} > {{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="Form-Item-Error">
                    @if($errors->has('job'))
                        <li>{{ $errors->first('job') }}</li>
                    @endif
                </div>
            </div>
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label isMsg">
                <span class="Form-Item-Label-Required">必須</span>お問い合わせ内容
            </p>
            <div>
                <div>
                    <textarea name="content" class="Form-Item-Textarea" rows="20">{{ old('content') }}</textarea>
                </div>
                <div class="Form-Item-Error">
                </div>
            </div>
        </div>
            @if($errors->has('content'))
                <li>{{ $errors->first('content') }}</li>
            @endif
        <input type="submit" class="Form-Btn" value="確認する">
    </div>
</form>
<script>
    $(function(){
        $('#birthday').datepicker();
    });
</script>
@endsection
