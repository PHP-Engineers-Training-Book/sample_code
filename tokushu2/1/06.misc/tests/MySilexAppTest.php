<?php
use Silex\WebTestCase;
use Symfony\Component\HttpKernel\HttpKernel;

class MySilexAppTest extends WebTestCase
{
    /**
     * Creates the application.
     *
     * @return HttpKernel
     */
    public function createApplication()
    {
        $app = require __DIR__ . '/../src/app.php';
        return $app;
    }

    /**
     * /helloにアクセスしたときのテスト
     */
    public function testHello()
    {
        $client = $this->createClient();
        $client->request('GET', '/hello');
        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode(),
            "HTTPレスポンスのステータスコードが正しくありません。"
        );
        $this->assertContains("Hello", $response->getContent(),
            "HTTPのボディ部がHelloを含んでいないようです。"
        );
    }
}
