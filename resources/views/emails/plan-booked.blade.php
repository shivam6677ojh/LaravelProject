<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; background: #f8fafc; padding: 24px; border-radius: 12px;">
    <h2 style="margin: 0 0 12px; color: #0f172a;">Booking Confirmed</h2>
    <p style="color: #334155;">Hi {{ $booking->user->name }}, your booking is confirmed.</p>

    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 16px; margin-top: 16px;">
        <p style="margin: 0 0 8px;"><strong>Plan:</strong> {{ $booking->plan->title }}</p>
        <p style="margin: 0 0 8px;"><strong>Duration:</strong> {{ $booking->plan->duration }} minutes</p>
        <p style="margin: 0;"><strong>Status:</strong> {{ ucfirst($booking->status) }}</p>
    </div>

    <p style="color: #334155; margin-top: 16px;">Enjoy your practice and stay consistent.</p>
</div>
