@extends('layouts.app')
@section('content')


<h1>chatbot</h1>
<!-- ulにJavaScriptで、liを追加していく -->
<div id="field">
  <ul id="chat-ul"></ul>
</div>

<!-- 入力、送信ボタン -->
<div id="input-field">
  <input type="text" id="chat-input">
  <input type="button" value="送信" id="chat-button" onclick="btnFunc()">
</div>

@endsection

