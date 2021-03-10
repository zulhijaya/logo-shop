<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\PemesananLogo;
use Illuminate\Support\Facades\Mail;

class Index extends Component
{
    public $adminNumber = '6282238455881';
    public $customerName = '';

    public $form = [
        'name' => '',
        'phone_number' => '',
        'email' => '',
        'address' => '',
        'question_1' => '',
        'question_2' => '',
        'question_3' => '',
        'question_4' => '',
        'question_5' => '',
        'question_6' => '',
        'question_7' => '',
        'question_8' => '',
        'question_9' => '',
        'question_10' => '',
        'question_11' => '',
        'question_12' => '',
        'question_13' => '',
        'question_14' => '',
        'question_15' => '',
        'question_16' => '',
        'question_17' => ''
    ];

    protected $rules = [
        'form.name' => ['required'],
        'form.phone_number' => ['required', 'number'],
        'form.email' => ['required', 'email'],
        'form.address' => ['required'],
        'form.question_1' => ['required'],
        'form.question_2' => ['required'],
        'form.question_3' => ['required'],
        'form.question_4' => ['required'],
        'form.question_5' => ['required'],
        'form.question_6' => ['required'],
        'form.question_7' => ['required'],
        'form.question_8' => ['required'],
        'form.question_9' => ['required'],
        'form.question_10' => ['required'],
        'form.question_11' => ['required'],
        'form.question_12' => ['required'],
        'form.question_13' => ['required'],
        'form.question_14' => ['required'],
        'form.question_15' => ['required'],
        'form.question_16' => ['required'],
        'form.question_17' => ['required'],
    ];

    public function render()
    {
        return view('livewire.index');
    }

    public function sendFormPemesanan()
    {
        if( !$this->weatherAllDataFilled() ){
            $this->dispatchBrowserEvent('failed');
            $this->validate();
        } else {
            Mail::to($this->form['email'])->send(new PemesananLogo($this->form));
            $this->customerName = $this->form['name'];
            $this->dispatchBrowserEvent('success');
    
            $this->reset('form');
        }
    }

    public function weatherAllDataFilled()
    {
        if( 
            $this->form['name'] && 
            $this->form['phone_number'] &&
            $this->form['email'] &&
            $this->form['address'] &&
            $this->form['question_1'] &&
            $this->form['question_2'] &&
            $this->form['question_3'] &&
            $this->form['question_4'] &&
            $this->form['question_5'] &&
            $this->form['question_6'] &&
            $this->form['question_7'] &&
            $this->form['question_8'] &&
            $this->form['question_9'] &&
            $this->form['question_10'] &&
            $this->form['question_11'] &&
            $this->form['question_12'] &&
            $this->form['question_13'] &&
            $this->form['question_14'] &&
            $this->form['question_15'] &&
            $this->form['question_16'] &&
            $this->form['question_17']
        ) {
            return true;
        } else {
            return false;
        }
    }
}
