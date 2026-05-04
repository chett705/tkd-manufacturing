<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotation Request</title>
</head>
<body style="margin: 0; padding: 24px; background-color: #f8fafc; font-family: Arial, sans-serif; color: #1f2937;">
    <div style="max-width: 640px; margin: 0 auto; background-color: #ffffff; border-radius: 16px; overflow: hidden; border: 1px solid #e5e7eb;">
        <div style="background-color: #0B0B54; color: #ffffff; padding: 24px;">
            <h1 style="margin: 0; font-size: 24px;">New Quotation Request</h1>
            <p style="margin: 8px 0 0; font-size: 14px;">A customer has submitted a quotation request from the website.</p>
        </div>

        <div style="padding: 24px;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 10px 0; font-weight: bold; width: 180px;">Full Name</td>
                    <td style="padding: 10px 0;">{{ $quotation->full_name }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Company Name</td>
                    <td style="padding: 10px 0;">{{ $quotation->company_name ?: '-' }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Country</td>
                    <td style="padding: 10px 0;">{{ $quotation->country }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Email</td>
                    <td style="padding: 10px 0;">{{ $quotation->email }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">WhatsApp</td>
                    <td style="padding: 10px 0;">{{ $quotation->whatsapp ?: '-' }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Product ID</td>
                    <td style="padding: 10px 0;">{{ $quotation->product_id ?: '-' }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold;">Quantity</td>
                    <td style="padding: 10px 0;">{{ $quotation->quantity ?: '-' }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; font-weight: bold; vertical-align: top;">Message</td>
                    <td style="padding: 10px 0;">{{ $quotation->message ?: '-' }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
