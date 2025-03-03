<!DOCTYPE html>
<!--suppress HtmlDeprecatedAttribute -->
<html lang="{{ app()->getLocale() }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--[if mso]>
<style>
    * {
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif !important;
    }

</style>
<![endif]-->

<!--[if !mso]>
<link rel="preconnect" href="https://fonts.bunny.net">
<link rel="stylesheet" href="https://fonts.bunny.net/css?family=montserrat:400,400i">
<link rel="stylesheet" href="https://fonts.bunny.net/css?family=source-sans-pro:200,200i,300,300i,400,400i,600,600i,700,700i">

<style>
* {
    font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif !important;
}

.email-button {
    display: inline-block;
    padding: 10px 20px;
    color: #fff;
    background-color: #02253b;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.email-button:hover {
    color: #fff;
    background-color: #9bc654;
}
</style>
<![endif]-->

<title>{!! $title ?? 'Untitled' !!}</title>

</head>
<body>

<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="font-size: 100%;font-weight: 400;color: black;background-color: #88c2d8;">
    <tr>
        <!-- He's the DJ; I'm the wrapper -->
        <td align="center">
            <table width="600" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td style="background-color: #065a8f; font-size: 24px; font-weight: 600; line-height: 1;padding-top: 1rem; padding-bottom: 1rem;">
                        <span style="color: white;">Meta</span>
                        <span style="color: #9bc654;">Filter</span>
                    </td>
                </tr>
            </table>
            <table width="600" cellpadding="0" cellspacing="0" border="0" role="presentation">
                <tr>
                    <td style="color: black;background-color: white; font-size: 16px;">
                        <h1 style="font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;font-weight: 400;">
                            {!! $title ?? 'Untitled' !!}
                        </h1>
                    </td>
                </tr>
            </table>
            <table width="600" cellpadding="0" cellspacing="0" border="0" role="presentation">
                <tr>
                    <td style="color: black;background-color: white; font-size: 16px;">
                        @yield('contents')
                    </td>
                </tr>
            </table>
            <table width="600" cellpadding="0" cellspacing="0" border="0" role="presentation">
                <tr>
                    <td style="color: #2d2d2d;background-color: #858585; font-size: 10px;">
                        MetaFilter Community Foundation
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
