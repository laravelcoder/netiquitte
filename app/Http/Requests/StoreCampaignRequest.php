<?php

namespace App\Http\Requests;

use App\Models\Campaign;
use Illuminate\Foundation\Http\FormRequest;

class StoreCampaignRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'email_subject' => [
                'string',
                'required',
            ],
            'SendingTo' => [
                'required',
            ],
            'from_email' => [
                'string',
                'required',
            ],
            'content' => [
                'string',
                'nullable',
            ],
            // 'campaign_offer_id' => [
            //     'string',
            //     'nullable',
            // ],
            'selected_template_id' => [
                'string',
                'nullable',
            ],
        ];
    }
}
