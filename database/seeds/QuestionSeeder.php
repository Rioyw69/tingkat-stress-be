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
                'title' => 'Apakah mimpi-mimpi yang Anda alami menegangkan ?',
                'is_yes' => 0.85,
                'is_not' => 0
            ],

            [
                'title' => 'Apakah Anda lebih nyaman mengerjakan tugas kuliah pada malam hari dari pada sing hari walaupun tidak ada pekerjaan pada sing hari  ?',
                'is_yes' => 0.75,
                'is_not' => 0
            ],

            [
                'title' => 'Apakah Anda merasa terlalu sensitif ? ',
                'is_yes' => 0.8,
                'is_not' => 0
            ],
    
            [
                'title' => 'Saya enggan untuk bertemu dosen pembimbing karena takut mendapat penolakan terhadap revisi dan pengajuan skripsi yang saya kerjakan ?',
                'is_yes' => 0.75,
                'is_not' => 0
            ],
    
            [
                'title' => 'Saya mengerjakan pekerjaan sendiri untuk memastikan tugas terselesaikan dengan baik ?',
                'is_yes' => 0.7,
                'is_not' => 0
            ],
  
            [
                'title' => 'Saya merasa energi gugup berlebihan ?',
                'is_yes' => 0.85,
                'is_not' => 0
            ],
     
            [
                'title' => 'Apakah Anda merasa terbebani dengan nilai yang kurang bagus ?',
                'is_yes' => 0.8,
                'is_not' => 0
            ],
     
            [
                'title' => 'Saya mengabaikan tugas akhir (skripsi) yang saya kerjakan ?',
                'is_yes' => 0.7,
                'is_not' => 0
            ],
     
            [
                'title' => 'Saya merasa bahwa ada terlalu banyak deadline dalam tugas dan kehidupan yang sulit untuk diselesaikan ?',
                'is_yes' => 0.8,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah penglihatan Anda tajam tidak seperti biasanya ?',
                'is_yes' => 0.8,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda semakin sukar tidur ?',
                'is_yes' => 0.9,
                'is_not' => 0
            ],

            [
                'title' => 'Saya merasa selalu menyenangkan dan selalu bertambah semangat ?',
                'is_yes' => 0.7,
                'is_not' => 0
            ],
            
            [
                'title' => 'Apakah Anda merasa terbebani dengan tuntutan orang tua untuk lulus tepat waktu ?',
                'is_yes' => 0.85,
                'is_not' => 0
            ],
             
            [
                'title' => 'Apakah Anda tiba-tiba merasa lelah dan gelisah pada siang hari ?',
                'is_yes' => 0.7,
                'is_not' => 0
            ],
             
            [
                'title' => 'Saya sulit untuk membuat keputusan, lemah dalam berkonsentrasi dan mengingat karena mood yang mudah berubah ?',
                'is_yes' => 0.7,
                'is_not' => 0
            ],
             
            [
                'title' => 'Saya merasa tertekan, panik, sedih dan minder ketika melihat teman sebaya saya yang telah menyelesaikan kuliahnya ?',
                'is_yes' => 0.75,
                'is_not' => 0
            ],
            
            
            [
                'title' => 'Rasa percaya diri atau penghargaan diri saya lebih rendah dari yang saya inginkan ?',
                'is_yes' => 0.8,
                'is_not' => 0
            ],
            
            [
                'title' => 'Apakah Anda sering merasa mulas atau mual ketika gugup atau menghadapi momen yang menegangkan ?',
                'is_yes' => 0.8,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah kadang-kadang pula jantung berdebar-debar ?',
                'is_yes' => 0.9,
                'is_not' => 0
            ],
    
            [
                'title' => 'Saya meremehkan berapa lama waktu yang dibutuhkan untuk mengerjakan tugas kuliah dan tugas akhir (skripsi) ?',
                'is_yes' => 0.75,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda kadang memiliki gangguan dalam sistem pencernaan (gangguan usus dan perut kembung) ? ',
                'is_yes' => 0.8,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda mengingkari atau mengabaikan masalah yang dapat dilalui ?',
                'is_yes' => 0.75,
                'is_not' => 0
            ],
    
            [
                'title' => 'Anda merasa tegang pada otot-otot punggung dan tengkuk (belakang leher) ?',
                'is_yes' => 0.75,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda merasa letih sewaktu bangun pagi ?',
                'is_yes' => 0.85,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah otot-otot terasa lebih tegang ?',
                'is_yes' => 0.75,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda merasakan ketegangan semakin meningkat ?',
                'is_yes' => 0.85,
                'is_not' => 0
            ],
    
            [
                'title' => 'Anda memiliki gangguan tidur (sukar tidur, terbangun pada malam hari dan sukar tidur kembali atau bangun terlalu pagi) ?',
                'is_yes' => 0.85,
                'is_not' => 0
            ],
    
            [
                'title' => 'Badan saya terasa oyong, kepala pusing, mata berkunang-kunang, pucat dan terasa ingin pingsan ketika tekanan darah saya kurang (anemia) ?',
                'is_yes' => 0.75,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda merasa lelah menjelang sore ?',
                'is_yes' => 0.7,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda selalu merasa lelah, kurang fokus dan mood yang berantakan bahkan bertahan sepanjang hari terasa sulit ?',
                'is_yes' => 0.7,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda merasa berat atau tidak mampu untuk menanggapi percakapan, obrolan dan aktivitas sosial itu lainnya ?',
                'is_yes' => 0.7,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda merasa takut yang tidak dapat dijelaskan ? ',
                'is_yes' => 0.9,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda merasa negativistik ?',
                'is_yes' => 0.8,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda merasa letih walau tidak beraktivitas berat ?',
                'is_yes' => 0.85,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda merasa kurang mampu untuk melakukan pekerjaan sederhana seperti membaca dan menulis ?',
                'is_yes' => 0.7,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda merasa gangguan sistem pencernaan (sakit maag dan usus ) lebih sering ?',
                'is_yes' => 0.8,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda merasakan perasaan takut semakin menjadi, seperti panik ?',
                'is_yes' => 0.7,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda merasa terlalu bersemangat ?',
                'is_yes' => 0.8,
                'is_not' => 0
            ],
    
            [
                'title' => 'Apakah Anda sering kali terbangun dini hari ?',
                'is_yes' => 0.8,
                'is_not' => 0
            ],

            [
                'title' => 'Apakah kemampuan konsentrasi Anda menurun tajam ?',
                'is_yes' => 0.8,
                'is_not' => 0
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
