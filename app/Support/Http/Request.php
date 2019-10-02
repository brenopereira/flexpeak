<?php
/**
 * Request.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Support\Http;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class Request
 * @package App\Support\Http
 */
class Request extends FormRequest {
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
