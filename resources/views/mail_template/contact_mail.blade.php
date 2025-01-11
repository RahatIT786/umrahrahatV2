<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RahatGroup</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f7f7f7;">
    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#f7f7f7">
        <tr>
            <td align="center">
                <table width="600" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" style="margin: 20px auto; border: 1px solid #ddd; box-sizing: border-box;">
                    <!-- Header with logo -->
                    <tr>
                        <td align="center" style="padding: 20px;">
                            <img src="https://umrahrahat.com/asserts/user/img/haj/RAHAT_UMRAH_LOGO.png" alt="Company Logo" width="200" style="display: block; margin-bottom: 20px;">
                            <h2 style="margin: 0; font-family: Arial, sans-serif; color: #333;">Contact Details</h2>
                        </td>
                    </tr>

                    <!-- Body of the email -->
                    <tr>
                        <td style="padding: 20px; font-family: Arial, sans-serif; color: #333;">
                            <h1 style="font-size: 24px; margin: 0 0 15px;">New Message Received</h1>
                            <p style="font-size: 16px; margin: 10px 0;"><strong>Name:</strong> {{ $name }}</p>
                            <p style="font-size: 16px; margin: 10px 0;"><strong>Email:</strong> {{ $email }}</p>
                            <p style="font-size: 16px; margin: 10px 0;"><strong>Message:</strong></p>
                            <p style="font-size: 16px; margin: 10px 0;">{{ $message }}</p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 20px; text-align: center; font-family: Arial, sans-serif; font-size: 14px; color: #777;">
                            <p style="margin: 0;">This message was sent from umrahrahat.com</p>
                            <p style="margin: 0;">&copy; 2025 umrahrahat.com. All rights reserved.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
