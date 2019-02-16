<?php
/**
 * Created by PhpStorm.
 * User: Dhifli
 * Date: 16/02/2019
 * Time: 12:59
 */
?>
@extends('adminlte::page')

@section('title', 'NOOTA')

@section('content_header')
    <h1>كتابة جديدة</h1>
@stop

@section('content')
    <form dir="rtl">

    <script src="/js/tinymce/tinymce.min.js"></script>
    <labem for="title">عنوان الكتابة</labem>
    <input type="text" id="title" name="title" class="form-control">
    <labem for="title">المحتوى</labem>
    <textarea id="story-content" name="storycontent"></textarea>

    <button type="submit" class="btn btn-primary float-left">انشر الكتابة</button>
    </form>
    <script>
        tinymce.init({
            selector:'textarea',
            height: 550,
            plugins: 'fullpage fullscreen image link media template  lists textcolor   wordcount a11ychecker imagetools colorpicker textpattern help',
            toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            language: 'ar_TN'
        });
    </script>
    <style>
        .tox .tox-toolbar,.tox .tox-menubar{
            direction: rtl;
        }
        .float-left{
            float: left !important;
        }
    </style>
@stop