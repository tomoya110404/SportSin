<?php
namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

//*************************************************************
// Rule
//1.  use App\Http\Requests\GroupsValidation; //Add Controller
//2.  public function store( GroupsValidation $request ){ //example
//*************************************************************

class GroupsValidation extends FormRequest
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
                "name" => "max:50", //text('description')->nullable()
				"description" => "nullable", //text('description')->nullable()
				"desc_mini" => "required", //string('desc_mini')
				"age-group" => "nullable", //string('age-group')->nullable()
				"about_level" => "required", //string('about_level')
				"img" => "nullable", //string('img')->nullable()
				"groups_prefecture" => "required", //string('groups_prefecture')
				"user_id" => "required|integer", //integer('user_id')

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



