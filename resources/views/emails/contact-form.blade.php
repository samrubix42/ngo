<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Contact Form Submission</title>
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .email-wrapper {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .email-header {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
            padding: 40px 30px;
            text-align: center;
            color: #ffffff;
        }

        .email-header h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .email-header p {
            font-size: 16px;
            opacity: 0.95;
            margin: 0;
        }

        .icon-container {
            width: 70px;
            height: 70px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            backdrop-filter: blur(10px);
        }

        .icon-container svg {
            width: 35px;
            height: 35px;
            fill: #ffffff;
        }

        /* Content */
        .email-content {
            padding: 40px 30px;
        }

        .greeting {
            font-size: 18px;
            color: #1f2937;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .intro-text {
            font-size: 15px;
            color: #4b5563;
            margin-bottom: 30px;
            line-height: 1.7;
        }

        /* Contact Details Card */
        .details-card {
            background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
            border-left: 4px solid #059669;
            border-radius: 8px;
            padding: 25px;
            margin: 25px 0;
        }

        .detail-row {
            display: flex;
            padding: 12px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .detail-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .detail-row:first-child {
            padding-top: 0;
        }

        .detail-label {
            font-weight: 600;
            color: #374151;
            min-width: 100px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .detail-value {
            color: #1f2937;
            flex: 1;
            font-size: 14px;
            word-break: break-word;
        }

        /* Message Box */
        .message-box {
            background-color: #ffffff;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
        }

        .message-label {
            font-weight: 600;
            color: #374151;
            font-size: 14px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .message-content {
            color: #1f2937;
            font-size: 14px;
            line-height: 1.7;
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        /* Action Button */
        .action-button {
            display: inline-block;
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
            color: #ffffff;
            text-decoration: none;
            padding: 14px 32px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            text-align: center;
            margin: 20px 0;
            box-shadow: 0 4px 6px rgba(5, 150, 105, 0.3);
            transition: all 0.3s ease;
        }

        .action-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(5, 150, 105, 0.4);
        }

        /* Footer */
        .email-footer {
            background-color: #f9fafb;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }

        .footer-text {
            font-size: 13px;
            color: #6b7280;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .footer-links {
            margin: 15px 0;
        }

        .footer-links a {
            color: #059669;
            text-decoration: none;
            margin: 0 10px;
            font-size: 13px;
            font-weight: 500;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent 0%, #e5e7eb 50%, transparent 100%);
            margin: 20px 0;
        }

        /* Timestamp */
        .timestamp {
            background-color: #fef3c7;
            border-left: 3px solid #f59e0b;
            padding: 12px 15px;
            border-radius: 6px;
            margin: 20px 0;
            font-size: 13px;
            color: #92400e;
        }

        /* Icons */
        .icon-small {
            width: 16px;
            height: 16px;
            display: inline-block;
            vertical-align: middle;
        }

        /* Responsive */
        @media only screen and (max-width: 600px) {
            body {
                padding: 10px;
            }

            .email-header {
                padding: 30px 20px;
            }

            .email-header h1 {
                font-size: 24px;
            }

            .email-content {
                padding: 30px 20px;
            }

            .email-footer {
                padding: 20px;
            }

            .detail-row {
                flex-direction: column;
            }

            .detail-label {
                margin-bottom: 5px;
                min-width: auto;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <!-- Header -->
        <div class="email-header">
            <div class="icon-container">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h1>New Contact Form Submission</h1>
            <p>You have received a new inquiry from your website</p>
        </div>

        <!-- Content -->
        <div class="email-content">
            <p class="greeting">Hello Team,</p>
            
            <p class="intro-text">
                A new contact form submission has been received through your website. 
                Please review the details below and respond at your earliest convenience.
            </p>

            <!-- Timestamp -->
            <div class="timestamp">
                <strong>⏰ Received:</strong> {{ now()->format('F j, Y \a\t g:i A') }}
            </div>

            <!-- Contact Details -->
            <div class="details-card">
                <div class="detail-row">
                    <div class="detail-label">
                        <svg class="icon-small" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Name:
                    </div>
                    <div class="detail-value">{{ $contactData['name'] }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">
                        <svg class="icon-small" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Email:
                    </div>
                    <div class="detail-value">
                        <a href="mailto:{{ $contactData['email'] }}" style="color: #059669; text-decoration: none;">
                            {{ $contactData['email'] }}
                        </a>
                    </div>
                </div>

                @if(!empty($contactData['phone']))
                <div class="detail-row">
                    <div class="detail-label">
                        <svg class="icon-small" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Phone:
                    </div>
                    <div class="detail-value">
                        <a href="tel:{{ $contactData['phone'] }}" style="color: #059669; text-decoration: none;">
                            {{ $contactData['phone'] }}
                        </a>
                    </div>
                </div>
                @endif

                <div class="detail-row">
                    <div class="detail-label">
                        <svg class="icon-small" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                        Subject:
                    </div>
                    <div class="detail-value">
                        <strong>{{ ucfirst(str_replace('-', ' ', $contactData['subject'])) }}</strong>
                    </div>
                </div>
            </div>

            <!-- Message -->
            <div class="message-box">
                <div class="message-label">
                    <svg class="icon-small" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                    </svg>
                    Message:
                </div>
                <div class="message-content">{{ $contactData['message'] }}</div>
            </div>

            <div class="divider"></div>

            <!-- Call to Action -->
            <div style="text-align: center;">
                <a href="mailto:{{ $contactData['email'] }}" class="action-button">
                    Reply to {{ $contactData['name'] }}
                </a>
            </div>

            <p style="font-size: 13px; color: #6b7280; text-align: center; margin-top: 20px;">
                This is an automated notification from your website's contact form.
            </p>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p class="footer-text">
                <strong> Net Zero Carbon Solutions</strong><br>
                C-147, Govindpuram, Ghaziabad (U.P.) - 201013
            </p>
            
            <div class="footer-links">
                <a href="https://netzerocmission.com">Website</a> |
                <a href="mailto:info@netzerocmission.com">Email</a> |
                <a href="tel:+919350889056">+91 9350889056</a>
            </div>

            <div class="divider"></div>

            <p class="footer-text">
                © {{ date('Y') }} Net Zero Carbon Solutions. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
