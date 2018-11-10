<html>
<head></head>
<body>
    <table bgcolor="#ebebeb" style="margin-top:10px;font-family:'Helvetica',san-serif;color:#444" width="100%">
        <tbody>
            <tr>
                <td>
                    <table align="center" bgcolor="white" cellpadding="0" cellspacing="0" style="margin:60px auto;border-radius:7px;width:100%;max-width:550px">
                        <tbody>
                            <tr bgcolor="#282828" height="75">
                                <td style="padding:20px 30px;border-radius:7px 7px 0px 0px;text-align:center">
                                    <a href="we-edit.com.vn" target="_blank" style="color: #f1c55a;font-size: 24px;text-decoration: none;">
                                        We-edit.com.vn
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:20px">
                                <table style="font-size:15px" width="100%">
                                    <tbody>
                                        <tr>
                                            <td style="color:#03a9f4;font-size:20px;font-weight:bold">
                                                <div><strong>Name:</strong> {{ $first_name }} {{ $last_name }}</div>
                                                <div><strong>Email:</strong> {{ $email }}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color:#5b5b5c;padding-top:10px" width="100%">
                                                <h3>Message:</h3>
                                                <p>{{ $msg }}</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
