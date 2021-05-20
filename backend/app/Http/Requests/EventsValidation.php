<?php
namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

//*************************************************************
// Rule
//1.  use App\Http\Requests\EventsValidation; //Add Controller
//2.  public function store( EventsValidation $request ){ //example
//*************************************************************

class EventsValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //[ *1. default=false ]
    }
    
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //[ *2. Validation rule description location ]
        return [
				"name" => "required", //string('name')
				"participants" => "required", //string('participants')
				"area" => "required", //string('area')
				"skill_level" => "required", //string('skill_level')
				"target_number" => "required|integer", //integer('target_number')
				"event_img" => "nullable", //string('event_img')->nullable()
				"start_day" => "required|date_format:Y-m-d H:i:s", //datetime('start_day')
				"group_id" => "required|integer", //integer('group_id')

            ];
        }
    
        //[ *3. Set Validation message (*Optional) ]
        //Be sure to use [messages] for the Function name.
        //[Ja]https://readouble.com/laravel/6.x/ja/validation-php.html
        public function messages(){
            return [
                //"email.required"  => "メールアドレスを入力してください",
                //"email.max"       => "**文字以下で入力してください",
            ];
        }
    
    }



