<?php

namespace Modules\Product\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Product\Http\Requests\SaveProductRequest;

class ProductController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'product::products.product';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'product::admin.products';

    /**
     * Form requests for the resource.
     *
     * @var array|string
     */
    protected $validation = SaveProductRequest::class;

    public function nebim()
    {
        $url = 'http://78.188.185.166:6767/IntegratorService/Connect';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);         
        curl_setopt($ch, CURLOPT_POST, true);    
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);                                                                 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);                                                         
        $result = curl_exec($ch);
        $response=json_decode($result, true);	
        print_r($response);

        return $html;
    }
}
