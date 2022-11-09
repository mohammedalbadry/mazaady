<?php

namespace App\Http\Services;

class FilterService {

    public function handelFilter($filters){

        $clean_data = []; 

        foreach(json_decode($filters) as $filter){
            $item  = [
                'option_name' =>  $filter->model_name,
                'option_value' =>  $filter->selected_value_name == "other" ? "خيار مخصص ( " .  $filter->other_text  . " )" :  $filter->selected_value_name,
                'option_id' =>  $filter->model_id,
                'value_id' =>  $filter->selected_value_id != 0 ? $filter->selected_value_id : 0,
            ];
            array_push($clean_data, $item);
        }

        return $clean_data;

    }
}