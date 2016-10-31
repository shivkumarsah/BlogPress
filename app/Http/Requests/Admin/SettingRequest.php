<?php namespace App\Http\Requests\Admin;

use App\Setting;
use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		//dd($this->segment(2));
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
					'copyscrap_api' => 'required',
					'copyscrap_check' => 'required',
					'content_req_length' => 'required|integer',
					'google_analytics' => 'required',
					'google_webmasters' => 'required',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'copyscrap_api' => 'required',
					'copyscrap_check' => 'required',
					'content_req_length' => 'required|integer',
					'google_analytics' => 'required',
					'google_webmasters' => 'required',
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
