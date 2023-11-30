<?php

namespace App\Controllers;

class Page extends BaseController {
    public function about(): string
    {
        return view('about');
    }

    public function contact(): string
    {
        $data['name'] = "Gabriella Natasya";
        return view("contact", $data);
    }

    public function faqs(): string
    {
        $data['data_faqs'] = [
          [
            'question' => 'Apa itu Codeigniter?',
            'answer' => 'Codeigniter adalah framework untuk membuat web'
          ],
          [
            'question' => 'Siapa yang membuat Codeiginter?',
            'answer' => 'CI awalnya dibuat oleh Ellislab'
          ],
          [
            'question' => 'Codeigniter versi berapakah yang digunakan pada tutoril ini?',
            'answer' => 'Codeigniter versi 4.0.4'
          ]
        ];

        // load view dengan data
        return view("faqs", $data);
    }
}