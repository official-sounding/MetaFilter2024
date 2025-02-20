<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="x-apple-disable-message-reformatting">
<meta name="color-scheme" content="light dark">
<meta name="supported-color-schemes" content="light dark">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>{!! $title ?? 'Untitled' !!}</title>

<style rel="stylesheet" media="all">
    @import url('https://fonts.bunny.net/css?family=source-sans-pro:200,200i,300,300i,400,400i,600,600i,700,700i');

    :root {
        color-scheme: light dark;
        supported-color-schemes: light dark;
    }

    body,
    td,
    th {
        font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-optical-sizing: auto;
    }

    body {
        color: #333;
        background-color: #fff;
        width: 100% !important;
        height: 100%;
        margin: 0;
        -webkit-text-size-adjust: none;
    }

    a {
        color: #3869d4;
        background-color: inherit;
        text-decoration: underline;
    }

    a img {
        border: none;
    }

    h1 {
        color: #333;
        margin-top: 0;
        font-size: 26px;
        font-weight: bold;
        text-align: left;
        text-wrap: balance;
    }

    h2 {
        color: #333;
        margin-top: 0;
        font-size: 21px;
        font-weight: 900;
        text-align: left;
        text-wrap: balance;
    }

    p,
    ul,
    ol,
    blockquote {
        margin: 8px 0 20px;
        font-size: 16px;
        line-height: 1.625;
    }

    .sub {
        font-size: 13px;
    }

    .button {
        color: #fff !important;
        background-color: #3869D4;
        border-top: 10px solid #3869D4;
        border-right: 18px solid #3869D4;
        border-bottom: 10px solid #3869D4;
        border-left: 18px solid #3869D4;
        display: inline-block;
        text-decoration: none;
        border-radius: 3px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);
        box-sizing: border-box;
        -webkit-text-size-adjust: none;
    }

    .email-wrapper {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .email-body,
    .email-content,
    .email-wrapper {
        -premailer-width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
    }

    .email-content {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .email-body {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .content-cell {
        padding: 36px;
    }

    @media (prefers-color-scheme: dark) {
        body {
            color: #fff !important;
            background-color: #333 !important;
        }

        a {
            color: #82a9ff;
            background-color: inherit;
        }
    }

</style>

<!--[if mso]>
<style>
    .f-fallback  {
        font-family: Arial, sans-serif;
    }
</style>
<![endif]-->

</head>
<body>

<table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
        <td align="center">
            <table class="email-content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                    <td class="email-body" width="570" cellpadding="0" cellspacing="0">
                        <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                            <tr>
                                <td class="content-cell">
                                    <div class="f-fallback">
                                        @yield('contents')
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
