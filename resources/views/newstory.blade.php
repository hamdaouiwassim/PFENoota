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
    <div class="row bg-gray-active " style="padding-top: 30px;padding-bottom: 10px;margin-top: -20px;">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>°</h3>

                    <p>الاحصائيات</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/statistics" class="small-box-footer">الاحصائيات<span>  </span><i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>°<sup style="font-size: 20px"></sup></h3>

                    <p>كتابي المفضلون</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="/favourit-writers" class="small-box-footer"> كتابي المفضلون <i class="fa fa-arrow-circle-left"></i></a>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>°</h3>

                    <p>كتابات الشهر</p>
                </div>
                <div class="icon">
                    <i class="fa fa-files-o"></i>
                </div>
                <a href="/monthly-writing-contest" class="small-box-footer"> كتابات الشهر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3>°</h3>

                    <p>اكتب الآن</p>
                </div>
                <div class="icon">
                    <i class="fa ion-edit"></i>
                </div>
                <a href="/new-story" class="small-box-footer">اكتب الآن<span>  </span><i class="fa fa-arrow-circle-left"></i></a>

            </div>
        </div>
    </div>

@stop

@section('content')
    <h1>كتابة جديدة</h1>
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