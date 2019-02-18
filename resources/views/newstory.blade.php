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
    <script src="/js/tinymce/tinymce.min.js"></script>

    <form dir="rtl" method="post" action="/new-story">
        @csrf
        <labem for="title">عنوان الكتابة</labem>
        <input type="text" id="title" name="title" class="form-control">
        <labem for="title">المحتوى</labem> <textarea id="story-content" name="storycontent"></textarea>
        <button type="submit" class="btn btn-primary float-left">انشر الكتابة</button>
    </form>
    <script>
        tinymce.init({
            selector:'textarea',
            height: 400,
            plugins: ' image link lists  wordcount  imagetools textpattern directionality ',
            toolbar: 'formatselect | ltr rtl bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            directionality :"rtl",
            language: 'ar_TN',
            setup: function (e) {
                e.on('change', function () {
                    e.save();
                });
            }
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