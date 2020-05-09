<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::truncate();
        $questions = [

            [
                'title' => 'Apakah Anda merasa terlalu bersemangat ?',
                'is_yes' => 60,
                'is_not' => 40
            ],

            [
                'title' => 'Apakah Anda merasa terlalu bersemangat ?',
                'is_yes' => 60,
                'is_not' => 40 
            ],

            [
                'title' => 'Apakah penglihatan Anda tajam tidak seperti biasanya ?',
                'is_yes' => 60,
                'is_not' => 40
            ],

            [
                'title' => 'Saya merasa energi dan gugup berlebihan ? ',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Saya merasa selalu menyenangkan dan selalu bertambah bersemangat ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Saya mengerjakan pekerjaan sendiri untuk memastikan tugas terselesaikan dengan baik ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
  
            [
                'title' => 'Apakah Anda sering mengerjakan tugas kuliah di rumah pada malam hari ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
     
            [
                'title' => 'Apakah Anda mengingkari atau mengabaikan masalah yang dapat dilalui ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
     
            [
                'title' => 'Saya meremehkan seberapa lama waktu yang dibutuhkan dalam melakukan segala hal ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
     
            [
                'title' => 'Saya merasa bahwa ada terlalu banyak deadline dalam tugas dan kehidupan yang sulit untuk diselesaikan ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah Anda merasa terlalu sensitif ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Saya mengabaikan tugas akhir (skripsi) yang sedang dikerjakan',
                'is_yes' => 60,
                'is_not' => 40
            ],

            [
                'title' => 'Saya enggan untuk bertemu dosen pembimbing',
                'is_yes' => 60,
                'is_not' => 40
            ],
            
            [
                'title' => 'Apakah anda merasa terbebani dengan tuntutan orang tua untuk lulus tepat waktu?',
                'is_yes' => 60,
                'is_not' => 40
            ],
             
            [
                'title' => 'Saya merasa tertekan ketika melihat teman sebaya yang telah menyelesaikan kuliahnya ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
             
            [
                'title' => 'Saya mengalami mood yang gampang terbuai, sulit membuat keputusan, dan lemah konsentrasi dan memori ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
            
            
            [
                'title' => 'Rasa percaya diri atau penghargaan diri saya lebih rendah dari yang saya inginkan',
                'is_yes' => 60,
                'is_not' => 40
            ],
            
            [
                'title' => 'Apakah Anda merasa letih sewaktu bangun pagi ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah Anda merasa lelah sesudah makan siang ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah Anda merasa lelah menjelang sore ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah terkadang Anda mengalami gangguan dalam sistem pencernaan (gangguan usus, perut kembung) ? ',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah kadang-kadan pula jantung berdebar-debar ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Anda merasakan tegang pada otot-otot punggung dan tengkuk (belakang leher) ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah Anda merasa gangguan pada usus lebih terasa (sakit perut, mulas) ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah otot-otot terasa lebih tegang ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Anda merasakan ketegang yang semakin meningkat ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Anda memiliki gangguan tidur (sukar tidur, sering terbangun malam dan sukar tidur kembali atau bangun terlalu pagi) ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Badan Anda terasa oyong, rasa-rasa mau pingsan (tidak sampai jatuh pingsan) ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah Anda merasa untuk bisa bertahan sepanjang hari terasa sulit ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah Anda Merasa kehilangan kemampuan untuk menanggapi situasi pergaulan sosial dan kegiatan-kegiatan rutin lainnya terasa berat ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah tidur Anda semakin sukar ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah Anda merasakan perasaan negativistik ? ',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah kemampuan berkonsentrasi Anda menurun tajam ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Anda merasaan takut yang tidak dapat dijelaskan ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah Anda merasa keletihan yang mendalam ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Anda merasa untuk pekerjaan yang sederhana saja terasa kurang mampu ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah Anda merasa gangguan sistem pencernaan (sakit maag dan usus) lebih sering ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah Anda merasa sukar buang air besar atau sebaliknya ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
            [
                'title' => 'Apakah mimpi-mimpi yang Anda alami menegangkan ?',
                'is_yes' => 60,
                'is_not' => 40
            ],

            [
                'title' => 'Apakah Anda sering kali terbangun dini hari ?',
                'is_yes' => 60,
                'is_not' => 40
            ],
    
        ];

        foreach ($questions as $data) {

            $question = new Question;
            $question->title = $data['title'];
            $question->is_yes = $data['is_yes'];
            $question->is_not = $data['is_not'];
            $question->save();

        }


    }
}
