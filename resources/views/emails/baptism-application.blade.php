<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Baptism Application</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #7c3aed, #dc2626);
            color: white;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            margin: -30px -30px 20px -30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .icon {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .info-section {
            margin: 20px 0;
            padding: 15px;
            background-color: #f9fafb;
            border-left: 4px solid #7c3aed;
            border-radius: 5px;
        }
        .info-row {
            margin: 10px 0;
            padding: 8px 0;
            border-bottom: 1px solid #e5e7eb;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: 600;
            color: #7c3aed;
            display: inline-block;
            width: 140px;
        }
        .value {
            color: #374151;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #e5e7eb;
            text-align: center;
            color: #6b7280;
            font-size: 14px;
        }
        .alert-box {
            background-color: #fef3c7;
            border-left: 4px solid #f59e0b;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .alert-box strong {
            color: #92400e;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="icon">✝️</div>
            <h1>New Baptism Application</h1>
            <p style="margin: 10px 0 0 0; font-size: 14px; opacity: 0.9;">
                TRC AGC Church - Discipleship Ministry
            </p>
        </div>

        <p style="font-size: 16px; color: #374151;">
            A new baptism application has been submitted through the church website. 
            Please review the details below and follow up with the applicant.
        </p>

        <div class="info-section">
            <h2 style="margin-top: 0; color: #1f2937; font-size: 18px;">
                📋 Applicant Information
            </h2>
            
            <div class="info-row">
                <span class="label">Full Name:</span>
                <span class="value">{{ $data['first_name'] }} {{ $data['last_name'] }}</span>
            </div>
            
            <div class="info-row">
                <span class="label">Email:</span>
                <span class="value">
                    <a href="mailto:{{ $data['email'] }}" style="color: #7c3aed; text-decoration: none;">
                        {{ $data['email'] }}
                    </a>
                </span>
            </div>
            
            <div class="info-row">
                <span class="label">Phone Number:</span>
                <span class="value">
                    <a href="tel:{{ $data['phone'] }}" style="color: #7c3aed; text-decoration: none;">
                        {{ $data['phone'] }}
                    </a>
                </span>
            </div>
            
            <div class="info-row">
                <span class="label">Age:</span>
                <span class="value">{{ $data['age'] }} years old</span>
            </div>
            
            <div class="info-row">
                <span class="label">Gender:</span>
                <span class="value">{{ ucfirst($data['gender']) }}</span>
            </div>
            
            <div class="info-row">
                <span class="label">Submission Date:</span>
                <span class="value">{{ date('F j, Y \a\t g:i A') }}</span>
            </div>
        </div>

        <div class="alert-box">
            <strong>⏰ Next Steps:</strong>
            <ul style="margin: 10px 0 0 0; padding-left: 20px;">
                <li>Review the application within 24-48 hours</li>
                <li>Contact the applicant to schedule a pastoral meeting</li>
                <li>Provide information about catechism class schedule</li>
                <li>Add to the baptism preparation tracking system</li>
            </ul>
        </div>

        <div style="text-align: center; margin: 30px 0;">
            <a href="mailto:{{ $data['email'] }}" 
               style="display: inline-block; background: linear-gradient(135deg, #7c3aed, #dc2626); color: white; padding: 12px 30px; text-decoration: none; border-radius: 25px; font-weight: 600;">
                📧 Reply to Applicant
            </a>
        </div>

        <div class="footer">
            <p style="margin: 5px 0;">
                <strong>TRC AGC Church</strong><br>
                Thika Road Connect Assembly of God Church<br>
                Discipleship Ministry
            </p>
            <p style="margin: 15px 0 5px 0; font-size: 12px;">
                This is an automated notification from the church website.<br>
                For support, contact: 
                <a href="mailto:discipleship@thikaroadconnectagc.org" style="color: #7c3aed;">
                    discipleship@thikaroadconnectagc.org
                </a>
            </p>
        </div>
    </div>
</body>
</html>