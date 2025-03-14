<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{!! $title ?? 'MetaFilter Email' !!}</title>

<!--[if !mso]><!-- -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style type="text/css">
    #outlook a {
        padding: 0;
    }

    .ReadMsgBody {
        width: 100%;
    }

    .ExternalClass {
        width: 100%;
    }

    .ExternalClass * {
        line-height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }

    table,
    td {
        border-collapse: collapse;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
    }

</style>
<!--[if !mso]><!-->
<style type="text/css">
    @media only screen and (max-width:480px) {
        @-ms-viewport {
            width: 320px;
        }
        @viewport {
            width: 320px;
        }
    }
</style>
<!--<![endif]-->

<!--[if mso]><xml>  <o:OfficeDocumentSettings>    <o:AllowPNG/>    <o:PixelsPerInch>96</o:PixelsPerInch>  </o:OfficeDocumentSettings></xml><![endif]-->
<!--[if lte mso 11]><style type="text/css">  .outlook-group-fix {    width:100% !important;  }</style><![endif]-->

<!--[if !mso]><!-->
<link rel="preconnect" href="https://fonts.bunny.net">
<link rel="stylesheet" href="https://fonts.bunny.net/css?family=source-sans-pro:200,200i,300,300i,400,400i,600,600i,700,700i&amp;display=swap">
<style type="text/css">
    @import url('https://fonts.bunny.net/css?family=source-sans-pro:200,200i,300,300i,400,400i,600,600i,700,700i&display=swap');
</style>
<!--<![endif]-->

<style type="text/css">
    @media only screen and (max-width:595px) {
        .container {
            width: 100% !important;
        }

        .button {
            display: block !important;
            width: auto !important;
        }
    }
</style>

</head>
<body style="background-color: #aed6e5;">

{{-- TODO: DeEasterEggIfy --}}
<!-- He's the DJ; I'm the wrapper -->
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
    <tbody>
    <tr>
        <!-- He's the DJ; I'm the wrapper -->
        <td valign="top" align="center">
            <table class="container" width="600" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                <tr>
                    <td style="padding: 18px 0 18px 0; text-align: center; font-size: 20px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;background-color: #065a8f"><span style="color: white;">Meta</span><span style="color: #9bc654;">Filter</span></td>
                </tr>
                <tr>
                    <td class="main-content" style="padding: 24px 16px 24px 16px; color: #000000; font-size: 16px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;" bgcolor="#ffffff">
                        @yield('contents')
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 0px;">
                        <!--[if mso | IE]>      <table role="presentation" border="0" cellpadding="0" cellspacing="0">        <tr>          <td style="vertical-align:top;width:300px;">      <![endif]-->
                        <div class="outlook-group-fix" style="padding: 0 0 20px 0; vertical-align: top; display: inline-block; text-align: center; width:100%;">
                            <div style="padding: 8px; font-size: 12px; line-height: 16px; font-weight: normal; color: #333; background-color: #c2c2c2; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;">MetaFilter Community Foundation</span>
                            </div>
                            <!--[if mso | IE]>      </td></tr></table>      <![endif]-->
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>

</body>
</html>
