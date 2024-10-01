<?php

namespace Tests\Controllers;

use App\Http\Controllers\Api\MessageController;
use App\Models\User;
use Tests\TestCase;

# php artisan test --filter=MessageControllerTest
class MessageControllerTest extends TestCase
{
    // Todo método de teste precisa ter "test" no começo do nome
    # php artisan test --filter=MessageControllerTest::test_message
    public function test_message(): void
    {
        $user = new User;
        $user = $user->select('*')->where('id', 1)->first();
        $controller = new MessageController;
        $index = $controller->index($user);
        $this->assertIsArray($index, 'As mensagens precisam ser um array');
    }
}
