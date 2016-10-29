<?php namespace App\Http\Requests\Admin;

use App\Ads;
use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
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
					'home_page' => 'required',
					'listing_page' => 'required',
					'detail_page' => 'required',
					'common_header' => 'required',
					'common_footer' => 'required',
					'common_left' => 'required',
					'common_right' => 'required'
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'home_page' => 'required',
					'listing_page' => 'required',
					'detail_page' => 'required',
					'common_header' => 'required',
					'common_footer' => 'required',
					'common_left' => 'required',
					'common_right' => 'required'
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
