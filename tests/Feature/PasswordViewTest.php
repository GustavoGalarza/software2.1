<?php 

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Event;
use App\Events\PasswordShownEvent;

class PasswordViewTest extends TestCase
{
    use DatabaseTransactions;

    public function testEventoVerContraseña()
    {
        Event::fake([PasswordShownEvent::class]);
        $response = $this->post('/login', [
            'username' => 'gustavo',
            'password' => 'gustavo123',
            'showPassword' => true, 
        ]);
        Event::assertDispatched(PasswordShownEvent::class);
    }
}