<?php
/**
 * CreateAccountRequest.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Units\Auth\Http\Requests;

use App\Support\Http\Request;

class CreateAccountRequest extends Request {
    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required'
        ];
    }
}
