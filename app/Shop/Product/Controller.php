<?php


namespace  Shop\Product;
use \Shop\Product\ExtendedProduct;
//use \Shop\Product\ExtendedProduct;


class Controller
{
    public function execute($request,$response)
    {
        //echo $request->id;
        $product = new ExtendedProduct();
        try {

            $product->getPersistence()->load($request->id);
            return print_r($product, true);

        } catch (NotFoundException $e) {
            \Shop\Services\Logger::getLogger()->debug(
                $e->getMessage(), $e->getTrace());

            return "Sorry, the product not found";

        }catch (\Exception $e) {
            \Shop\Services\Logger::getLogger()->debug(
                $e->getMessage(), $e->getTrace());
            return "Fatal error!";

        }
    }
}