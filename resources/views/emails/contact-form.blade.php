<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f5f5f5;">
    <div style="background-color: #8B1E3F; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0;">
        <h1 style="margin: 0; font-size: 24px;">New Contact Form Submission</h1>
        <p style="margin: 10px 0 0 0;">Aye Sickle Cell Foundation</p>
    </div>
    
    <div style="background-color: white; padding: 30px; border-radius: 0 0 8px 8px;">
        <h2 style="color: #8B1E3F; margin-top: 0;">Contact Details</h2>
        
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #eee;"><strong>Name:</strong></td>
                <td style="padding: 10px 0; border-bottom: 1px solid #eee;">{{ $submission->name }}</td>
            </tr>
            <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #eee;"><strong>Email:</strong></td>
                <td style="padding: 10px 0; border-bottom: 1px solid #eee;">
                    <a href="mailto:{{ $submission->email }}" style="color: #2FA4A9;">{{ $submission->email }}</a>
                </td>
            </tr>
            @if($submission->phone)
            <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #eee;"><strong>Phone:</strong></td>
                <td style="padding: 10px 0; border-bottom: 1px solid #eee;">{{ $submission->phone }}</td>
            </tr>
            @endif
            @if($submission->subject)
            <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #eee;"><strong>Subject:</strong></td>
                <td style="padding: 10px 0; border-bottom: 1px solid #eee;">{{ $submission->subject }}</td>
            </tr>
            @endif
            <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #eee;"><strong>Submitted:</strong></td>
                <td style="padding: 10px 0; border-bottom: 1px solid #eee;">{{ $submission->created_at->format('F j, Y \a\t g:i A') }}</td>
            </tr>
        </table>
        
        <h3 style="color: #8B1E3F; margin-top: 30px;">Message:</h3>
        <div style="background-color: #f9f9f9; padding: 15px; border-left: 4px solid #2FA4A9; border-radius: 4px;">
            <p style="margin: 0; line-height: 1.6; white-space: pre-wrap;">{{ $submission->message }}</p>
        </div>
        
        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; text-align: center; color: #666; font-size: 12px;">
            <p>This email was sent from the Aye Sickle Cell Foundation contact form.</p>
            <p>IP Address: {{ $submission->ip_address }}</p>
        </div>
    </div>
</div>
