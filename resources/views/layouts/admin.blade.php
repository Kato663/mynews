<!DOCTYPE html>
<html lang="{{ app()->getlocale()}}"
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--ブラウザのedgeに対応できるという意味-->
	<meta name="viewport" content="width=device-width,initial-scale=1"> 
	<!--画面の大きさを色々な大きさに対応出来るようにする-->
	
	<!--CSRF Token -->
	{{-- 後の章で説明が入る--}}
	<meta name="csrf-token" content="{{ csrf_token()}}">
	<!--外部からの攻撃を防ぐためのプログラム-->
	<title>@yield('title')</title>
	
	<!-- Scripts -->
	{{-- Laravel標準で用意されているJSを読み込む--}}
	<script src="{{secure_asset('js/app.js') }}" defer></script>
	
	<!--fonts-->
	
</head>