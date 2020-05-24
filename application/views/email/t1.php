<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>{subject}</title>
    </head>

    <body>

        <table  width="100%" cellspacing="0">
            <tr align="center" >
                <td style="padding:15px;"><img src="<?=base_url("fontend/fonts/"); ?>images/logo.png" /></td>
            </tr>
            <tr>
                <td>

                    <table width="90%" align="center" cellspacing="0" style="margin-bottom:20px;">
                        <tr  align="center" style="color:#fff;">
                            <td style="border-bottom:4px solid #101f51; background-color:#faa919;padding:15px;" ><?= isset($subject) ? $subject : "" ?></td>
                        </tr>

                        <tr height="600px" style="background-color:#faa919;vertical-align:top;">
                            <td style="padding:10px;color:#fff;">{data}</td>
                        </tr>

                    </table>

                </td>
            </tr>
            <tr align="center">
                <td style="background-color:#101f51;color:#fff;">
                    <p>GOt QuestionS? Please get in touch with our 24x7 Customer Care</p>
                    <p>KEEP IN TOUCH</p>
                    <p>IF YOU HAVE ANY QUESTIONS,CONCERNS,OR SUGGESTIONS</p>
                </td>
            </tr>
            <tr align="center">
                <td style="color:#000;">
                    <p><spam style="background-color:pink">PLEASE EMAIL US:MAIL@EMAIL.COM</spam></p>
                    <a href=""><img src="<?=base_url("fontend/fonts/"); ?>images/mail.png" /></a>	
                    <a href=""><img src="<?=base_url("fontend/fonts/"); ?>images/earth.png" /></a>	
                    <a href=""><img src="<?=base_url("fontend/fonts/"); ?>images/insta.png" /></a>	
                    <a href=""><img src="<?=base_url("fontend/fonts/"); ?>images/fb.png" /></a>	
                </td>
            </tr>
            <tr align="center">
                <td style="background-color:#a8cf4b;color:#000;">
                    <p> © <spam style="background-color:pink">2020 ABC inc., ALL RIGHT RESERVED.</spam></p>
                    <p><spam style="background-color:pink">300, WEB STREET,OAKLAND CA 94607</spam></p>
                    <p>This email was sent from a notification-only address that cannot accept incoming email. Please do not reply to this message.</p>
                </td>
            </tr>
            <tr>
                <td><img src="<?=base_url("fontend/fonts/"); ?>images/footer.png" width="100%"/></td>
            </tr>
        </table>
    </body>
</html>