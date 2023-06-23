<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewOrder extends Mailable
{
    use Queueable, SerializesModels;

    private array $data;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    final public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Нове замовлення',
        );
    }

    /**
     * Get the message content definition.
     */
    final public function content(): Content
    {
        return new Content(
            view: 'emails.new-order',
            with: [
                'name' => $this->data['name'],
                'phone' => $this->data['phone'],
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    final public function attachments(): array
    {
        return [];
    }
}
