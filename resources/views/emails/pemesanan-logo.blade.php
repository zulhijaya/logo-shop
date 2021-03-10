@component('mail::message')
Halo, {{ config('app.name') }}

<strong>Identitas Pemesan</strong> <br>
Nama : {{ $name }} <br>
Nomor Handphone : {{ $phone_number }} <br>
Alamat : {{ $address }} <br><br>

<strong>Desain Logo</strong> <br>
1. {{ $question_1  }} <br>
2. {{ $question_2  }} <br>
3. {{ $question_3  }} <br>
4. {{ $question_4  }} <br>
5. {{ $question_5  }} <br>
6. {{ $question_6  }} <br>
7. {{ $question_7  }} <br>
8. {{ $question_8  }} <br>
9. {{ $question_9  }} <br>
10. {{ $question_10  }} <br>
11. {{ $question_11  }} <br>
12. {{ $question_12  }} <br>
13. {{ $question_13  }} <br>
14. {{ $question_14  }} <br>
15. {{ $question_15  }} <br>
16. {{ $question_16  }} <br>
17. {{ $question_17  }} <br>

<br>
Thanks,<br>
{{ $name }}
@endcomponent
