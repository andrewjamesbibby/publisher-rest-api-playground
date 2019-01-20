<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Inbox - Free Bulma template</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.7.2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <style>

        html,body {
            font-family: 'Open Sans', serif;
            font-size: 14px;
            line-height: 1.5;
            height: 100%;
            background-color: #fff;
            overflow: hidden;
        }
        .nav.is-dark {
            background-color: #232B2D;
            color: #F6F7F7;
        }
        .nav.is-dark .nav-item a, .nav.is-dark a.nav-item {
            color: #F6F7F7;
        }
        .nav.is-dark .nav-item a.button.is-default {
            color: #F6F7F7;
            background-color: transparent;
            border-width: 2px;
        }
        .nav.menu {
            border-bottom: 1px solid #e1e1e1;
        }
        .nav.menu .nav-item .icon-btn {
            border: 3px solid #B7C6C9;
            border-radius: 90px;
            padding: 5px 7px;
            color: #B7C6C9;
        }
        .nav.menu .nav-item.is-active .icon-btn {
            color: #2EB398;
            border: 3px solid #2EB398;
        }
        .nav.menu .nav-item .icon-btn .fa {
            font-size: 20px;
            color: #B7C6C9;
        }
        .nav.menu .nav-item.is-active .icon-btn .fa {
            color: #2EB398;
        }
        .aside {
            display:block;
            background-color: #F9F9F9;
            border-right: 1px solid #DEDEDE;
        }
        .messages {
            display:block;
            background-color: #fff;
            border-right: 1px solid #DEDEDE;
        }
        .message {
            display:block;
            background-color: #fff;
        }
        .aside .compose {
            height: 95px;
            margin:0 -10px;
            padding: 25px 30px;
        }
        .aside .compose .button {
            color: #F6F7F7;
        }
        .aside .compose .button .compose {
            font-size: 14px;
            font-weight: 700;
        }
        .aside .main {
            padding: 40px;
            color: #6F7B7E;
        }
        .aside .title {
            color: #6F7B7E;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .aside .main .item {
            display: block;
            padding: 10px 0;
            color: #6F7B7E;
        }
        .aside .main .item.active {
            background-color: #F1F1F1;
            margin: 0 -50px;
            padding-left: 50px;
        }
        .aside .main .item:active,.aside .main .item:hover {
            background-color: #F2F2F2;
            margin: 0 -50px;
            padding-left: 50px;
        }
        .aside .main .icon {
            font-size: 19px;
            padding-right: 30px;
            color: #A0A0A0;
        }
        .aside .main .name {
            font-size: 15px;
            color: #5D5D5D;
            font-weight: 500;
        }
        .messages {
            padding: 40px 20px;
        }
        .message {
            padding: 40px 20px;
        }
        .messages .action-buttons {
            padding: 0;
            margin-top: -20px;
        }
        .message .action-buttons {
            padding: 0;
            margin-top: -5px;
        }
        .action-buttons .control.is-grouped {
            display: inline-block;
            margin-right: 30px;
        }
        .action-buttons .control.is-grouped:last-child {
            margin-right: 0;
        }
        .action-buttons .control.is-grouped .button:first-child {
            border-radius: 5px 0 0 5px;
        }
        .action-buttons .control.is-grouped .button:last-child {
            border-radius: 0 5px 5px 0;
        }
        .action-buttons .control.is-grouped .button {
            margin-right: -5px;
            border-radius: 0;
        }
        .pg {
            display: inline-block;
            top:10px;
        }
        .action-buttons .pg .title {
            display: block;
            margin-top: 0;
            padding-top: 0;
            margin-bottom: 3px;
            font-size:12px;
            color: #AAAAA;
        }
        .action-buttons .pg a{
            font-size:12px;
            color: #AAAAAA;
            text-decoration: none;
        }
        .is-grouped .button {
            background-image: linear-gradient(#F8F8F8, #F1F1F1);
        }
        .is-grouped .button .fa {
            font-size: 15px;
            color: #AAAAAA;
        }
        .inbox-messages {
            margin-top:60px;
        }
        .message-preview {
            margin-top: 60px;
        }
        .inbox-messages .card {
            width: 100%;
        }
        .inbox-messages strong {
            color: #5D5D5D;
        }
        .inbox-messages .msg-check {
            padding: 0 20px;
        }
        .inbox-messages .msg-subject {
            padding: 10px 0;
            color: #5D5D5D;
        }
        .inbox-messages .msg-attachment {
            float:right;
        }
        .inbox-messages .msg-snippet {
            padding: 5px 20px 0px 5px;
        }
        .inbox-messages .msg-subject .fa {
            font-size: 14px;
            padding:3px 0;
        }
        .inbox-messages .msg-timestamp {
            float: right;
            padding: 0 20px;
            color: #5D5D5D;
        }
        .message-preview .avatar {
            display: inline-block;
        }
        .message-preview .top .address {
            display: inline-block;
            padding: 0 20px;
        }


    </style>
</head>

<body>
    <div id="app">
        <app></app>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
