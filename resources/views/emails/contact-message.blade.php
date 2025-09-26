<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message - JAY VEE GROUP</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Helvetica Neue', Arial, sans-serif; background-color: #f6f6f6; color: #333333;">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f6f6f6;">
        <tr>
            <td align="center" style="padding: 40px 0;">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px; background-color: #ffffff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #003087; padding: 30px 20px; text-align: center; border-top-left-radius: 12px; border-top-right-radius: 12px;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 28px; font-weight: bold; letter-spacing: 1px;">JAY VEE GROUP</h1>
                            <p style="color: #e6e6e6; margin: 8px 0 0; font-size: 16px; font-weight: 300;">New Contact Submission</p>
                        </td>
                    </tr>
                    <!-- Body -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <strong style="display: inline-block; width: 120px; color: #4a4a4a; font-size: 16px;">Name:</strong>
                                        <span style="font-size: 16px; color: #333333;">{{ $data['name'] }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <strong style="display: inline-block; width: 120px; color: #4a4a4a; font-size: 16px;">Email:</strong>
                                        <span style="font-size: 16px; color: #333333;">{{ $data['email'] }}</span>
                                    </td>
                                </tr>
                                @if(!empty($data['phone']))
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <strong style="display: inline-block; width: 120px; color: #4a4a4a; font-size: 16px;">Phone:</strong>
                                        <span style="font-size: 16px; color: #333333;">{{ $data['phone'] }}</span>
                                    </td>
                                </tr>
                                @endif
                                <tr>
                                    <td style="padding-bottom: 15px;">
                                        <strong style="display: inline-block; width: 120px; color: #4a4a4a; font-size: 16px;">Message:</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="white-space: pre-wrap; padding: 20px; border: 1px solid #e0e0e0; border-radius: 6px; background-color: #fafafa; font-size: 16px; line-height: 1.5; color: #333333;">{{ $data['message'] }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Divider -->
                    <tr>
                        <td style="padding: 0 30px;">
                            <hr style="border: none; border-top: 1px solid #e0e0e0; margin: 0;">
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #003087; padding: 30px; text-align: center; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px;">
                            <p style="font-size: 14px; color: #ffffff; margin: 0 0 15px; font-weight: 300;">Sent from the JAY VEE GROUP Contact Form</p>
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto;">
                                <tr>
                                    <td style="padding: 0 10px;">
                                        <a href="https://www.jayveegroup.com" style="color: #ffffff; font-size: 14px; text-decoration: none; font-weight: 300;">www.jayveegroup.com</a>
                                    </td>
                                    <td style="padding: 0 10px;">
                                        <a href="mailto:contact@jayveegroup.com" style="color: #ffffff; font-size: 14px; text-decoration: none; font-weight: 300;">contact@jayveegroup.com</a>
                                    </td>
                                    <td style="padding: 0 10px;">
                                        <a href="tel:+1234567890" style="color: #ffffff; font-size: 14px; text-decoration: none; font-weight: 300;">+123-456-7890</a>
                                    </td>
                                </tr>
                            </table>
                            <p style="font-size: 14px; color: #ffffff; margin: 15px 0 0; font-weight: 300;">JAY VEE GROUP | 123 Business Avenue, City, Country</p>
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="margin: 20px auto;">
                                <tr>
                                    <td style="padding: 0 8px;">
                                        <a href="https://www.facebook.com/jayveegroup" style="color: #ffffff; font-size: 12px; text-decoration: none;">Facebook</a>
                                    </td>
                                    <td style="padding: 0 8px;">
                                        <a href="https://www.twitter.com/jayveegroup" style="color: #ffffff; font-size: 12px; text-decoration: none;">Twitter</a>
                                    </td>
                                    <td style="padding: 0 8px;">
                                        <a href="https://www.linkedin.com/company/jayveegroup" style="color: #ffffff; font-size: 12px; text-decoration: none;">LinkedIn</a>
                                    </td>
                                </tr>
                            </table>
                            <p style="font-size: 12px; color: #cccccc; margin: 15px 0 0; font-weight: 300;">&copy; 2025 JAY VEE GROUP. All rights reserved.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>