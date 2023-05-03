<?php 
    namespace App\Services\FormHendlers;

    class NewContactFormHendler{

        public function prepareContactData(\Illuminate\Support\Collection $data)
        {     
            $data->pull('_token').

            $fullName = collect([
                'name' => $data->pull('name'),
                'surname' => $data->pull('surname')
            ]);

            $numberPhones = $data->filter(
                function($numberPhone){
                    if($numberPhone !== null) return $numberPhone;
                }
            )->map(fn($numberPhones)=>['number'=>$numberPhones]);
            
            return collect([
                'fullName' => $fullName,
                'phones' =>$numberPhones
            ])->toArray();
        }
    }
?>