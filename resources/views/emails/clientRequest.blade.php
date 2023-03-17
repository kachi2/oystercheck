<!DOCTYPE html>
<html>
<body>
<table cellspacing="0" cellpadding="10" align="center" style="width:100%; max-width:850px; box-sizing:border-box; border-collapse:collapse; font-weight:400; font-family:Roboto, sans-serif; margin:0;">
    <!-- head -->
    <tr>
        <td style="background-color: #ededed; padding: 30px;">
            <table align="center" cellspacing="0" cellpadding="0" style="width: 100%;">
                <tr bgcolor="#3d66fe"><td align="center" style="padding: 25px 10px 25px 10px; background-color: #3d66fe; font-weight: 600; font-size: 1.5em; color: #ffffff; text-align: center; text-transform: uppercase;">OYSTERCHECKS</td>
                </tr>
                <tr bgcolor="#ffffff"><td height="5px" style="line-height: 5px;"></td></tr>
                <!-- content -->
                <tr bgcolor="#ffffff">
                    <td style="padding:20px 30px 20px 30px;">
                        <table align="center" style="width: 100%; max-width: 800px;">
                            <tr><td style="font-weight: 500; font-size: 20px; color: #383838;">Dear Admin, you have new contact form</td></tr>
                            <tr><td height="7px" style="line-height: 7px;"></td></tr>
                            
                            <tr><td style=" font-weight: 400; font-size: 15px;">Name <span>'{{$data["name"]}}.'</span></td></tr>
                            <tr><td style="font-weight: 400; font-size: 15px;">Email: <span>'{{$data["email"]}}'</span></td></tr>
                            <tr><td style="font-weight: 400; font-size: 15px;">Phone: <span>{{$data['phone']}}</span></td></tr>
                            <tr><td style=" font-weight: 400; font-size: 15px;">Company: <span>'{{$data['company']}}.'</span></td></tr>
                            <tr><td style=" font-weight: 400; font-size: 15px;">Company Address: <span>'{{$data['address']}}.'</span></td></tr>
                            <tr><td height="20px" style="line-height:20px;"></td></tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>