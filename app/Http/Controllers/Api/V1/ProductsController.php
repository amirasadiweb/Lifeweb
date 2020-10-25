<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\BasicController;
use App\Http\Controllers\Controller;
use App\Models\Api\V1\Product;
use Illuminate\Http\Request;

class ProductsController extends BasicController
{
    public function show()
    {
        return Product::orderBy('created_at', 'desc')->get();
    }

    public function store()
    {
        $data=$this->validateRequest();

        try{
                Product::create($data);
                return $this->sendResponse($data, 'عملیات با موفقیت انجام شد');
        }
        catch (\Exception $exception) {

                return $this->sendError('Operation Failed', $exception->getMessage(), 500);
        }

    }

    public function update(Product $product)
    {

        try{

            $product->update($this->validateRequest());
            return $this->sendResponse($product, 'عملیات با موفقیت انجام شد');
        }
        catch (\Exception $exception) {

            return $this->sendError('Operation Failed', $exception->getMessage(), 500);
        }
    }

    public function destroy (Product $product)
    {
        try{

            $product->delete();
            return $this->sendResponse($product, 'عملیات با موفقیت انجام شد');
        }
        catch (\Exception $exception) {

            return $this->sendError('Operation Failed', $exception->getMessage(), 500);
        }
    }


    protected function validateRequest()
    {
        return request()->validate([
                'name'=>'required',
                'company'=>'required',
                'country'=>'required',
                'email'=>'required',
        ]);
    }

}
