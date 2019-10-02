<?php
/**
 * UserCreateRequest.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Units\Users\Http\Requests;

use App\Support\Http\Request;

class UserCreateRequest extends Request {
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
        ];
    }
}
