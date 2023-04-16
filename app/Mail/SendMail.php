<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use Illuminate\Mail\Mailables\Attachment;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;


class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mensaje;
    public $asunto;
    public $attached;

    public function __construct($mensaje, $asunto, $attached )
    {
        $this->mensaje = $mensaje;
        $this->asunto =$asunto;
        $this->attached = $attached;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->asunto,

        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.send-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        if ($this->attached) {
            return [
                $attached[] = Attachment::fromData(fn () => $this->attached->get(), 'attached.pdf')->withMime('application/pdf'),
            ];
        } else {
            return [];
        }
    }
}
