<?php namespace App\Http\Requests\Admin;

use App\Social;
use Illuminate\Foundation\Http\FormRequest;

class SocialRequest extends FormRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		if($this->segment(3)!="") {
			$user = Setting::find($this->segment(3));
		}

		switch($this->method())
		{
			case 'GET':
			case 'DELETE':
			{
				return [];
			}
			case 'POST':
			{
				return [
					'facebook' => 'required',
					'linkedin' => 'required',
					'gplus' => 'required',
					'twitter' => 'required',
					'instagram' => 'required',
					'youtube' =>  'required',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'facebook' => 'required',
					'linkedin' => 'required',
					'gplus' => 'required',
					'twitter' => 'required',
					'instagram' => 'required',
					'youtube' =>  'required',
					//'name' => 'required|min:3',
					//'email' => 'required|email|unique:users,email,'.$user->id,
				];
			}
			default:break;
		}
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

}
