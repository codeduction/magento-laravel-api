<?php

namespace Grayloon\Magento\Tests;

use Grayloon\Magento\Api\ProductAttributes;
use Grayloon\Magento\MagentoFacade;
use Illuminate\Support\Facades\Http;

class ProductAttributesTest extends TestCase
{
    public function test_can_call_magento_api_product_attributes()
    {
        $this->assertInstanceOf(ProductAttributes::class, MagentoFacade::api('productAttributes'));
    }

    public function test_can_call_magento_api_product_attributes_show()
    {
        Http::fake();

        $api = MagentoFacade::api('productAttributes')->show('foo');

        $this->assertTrue($api->ok());
    }
}
