<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PemesananLogo extends Mailable
{
    use Queueable, SerializesModels;

    public $form = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($form)
    {
        $this->form = $form;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('logoshop@gmail.com')
            ->markdown('emails.pemesanan-logo', [
                'name' => $this->form['name'],
                'phone_number' => $this->form['phone_number'],
                'address' => $this->form['address'],
                'question_1' => $this->form['question_1'],
                'question_2' => $this->form['question_2'],
                'question_3' => $this->form['question_3'],
                'question_4' => $this->form['question_4'],
                'question_5' => $this->form['question_5'],
                'question_6' => $this->form['question_6'],
                'question_7' => $this->form['question_7'],
                'question_8' => $this->form['question_8'],
                'question_9' => $this->form['question_9'],
                'question_10'=> $this->form['question_10'],
                'question_11'=> $this->form['question_11'],
                'question_12'=> $this->form['question_12'],
                'question_13'=> $this->form['question_13'],
                'question_14'=> $this->form['question_14'],
                'question_15'=> $this->form['question_15'],
                'question_16'=> $this->form['question_16'],
                'question_17'=> $this->form['question_17']
            ]);
    }
}
