<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Models\ReffBank;
use App\Models\ReffSandiBi;
use App\Models\ReffSandiSid;
use App\Http\Controllers\SettingController;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\WithoutMiddleware;

class SettingControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    public function testIndexBI()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);

        $response = $this->get('/setting/bi');
        $response->assertStatus(302);

    }

    public function testPostBI()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);

        $request = Request::create('/setting/bi', 'POST', [
            'jenis' => '1',
            'sandi' => '2',
            'keterangan' => 'test_keterangan',
            'old_jenis' => '1',
            'old_sandi' => '2',
            'old_keterangan' => 'old_keterangan'
        ]);

        $controller = new SettingController();
        $response = $controller->postBI($request);

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals('message', session('success-add'));
    }

    public function testDeleteBI()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);
        $reffSandiBi = ReffSandiBi::factory()->create(['JENIS' => '1', 'SANDI' => '2']);

        $request = Request::create('/setting/bi/delete', 'POST', [
            'jenis' => $reffSandiBi->JENIS,
            'sandi' => $reffSandiBi->SANDI
        ]);

        $controller = new SettingController();
        $response = $controller->deleteBI($request);

        $this->assertEquals(302, $response->getStatusCode());
    }

    public function testIndexSID()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);

        $response = $this->get('/setting/sid');
        $response->assertStatus(302);
    }

    public function testPostSID()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);

        $request = Request::create('/setting/sid', 'POST', [
            'jenis' => '1',
            'sandi' => '2',
            'keterangan' => 'test_keterangan',
            'old_jenis' => 'old_jenis',
            'old_sandi' => 'old_sandi',
            'old_keterangan' => 'old_keterangan'
        ]);

        $controller = new SettingController();
        $response = $controller->postSID($request);

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals('message', session('success-add'));
    }

    public function testDeleteSID()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);
        $reffSandiSid = ReffSandiSid::factory()->create(['JENIS' => '1', 'SANDI' => '2']);

        $request = Request::create('/setting/sid/delete', 'POST', [
            'jenis' => $reffSandiSid->JENIS,
            'sandi' => $reffSandiSid->SANDI
        ]);

        $controller = new SettingController();
        $response = $controller->deleteSID($request);

        $this->assertEquals(302, $response->getStatusCode());
    }

    public function testIndexBank()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);

        $response = $this->get('/setting/bank');
        $response->assertStatus(302);
    }

    public function testPostBank()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);

        $request = Request::create('/setting/bank', 'POST', [
            'kode' => '1',
            'bank' => 'test_bank'
        ]);

        $controller = new SettingController();
        $response = $controller->postBank($request);

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals('message', session('success-add'));
    }

    public function testDeleteBank()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);
        $reffBank = ReffBank::factory()->create(['KODE' => '1']);

        $request = Request::create('/setting/bank/delete', 'POST', [
            'kode' => $reffBank->KODE
        ]);

        $controller = new SettingController();
        $response = $controller->deleteBank($request);

        $this->assertEquals(302, $response->getStatusCode());
    }
    public function testPostBIFailed()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);

        $request = Request::create('/setting/bi', 'POST', [
            'jenis' => '1',
            'sandi' => '2',
            'keterangan' => 'test_keterangan',
            'old_jenis' => '1',
            'old_sandi' => '2',
            'old_keterangan' => 'old_keterangan'
        ]);

        $controller = new SettingController();
        $response = $controller->postBI($request);

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals('message', session('success-add'));
    }

    public function testDeleteBIFailed()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);
        $reffSandiBi = ReffSandiBi::factory()->create(['JENIS' => '1', 'SANDI' => '2']);

        $request = Request::create('/setting/bi/delete', 'POST', [
            'jenis' => $reffSandiBi->JENIS,
            'sandi' => $reffSandiBi->SANDI
        ]);

        $controller = new SettingController();
        $response = $controller->deleteBI($request);

        $this->assertEquals(302, $response->getStatusCode());
    }

    public function testIndexSIDFailed()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);

        $response = $this->get('/setting/sid');
        $response->assertStatus(302);
    }

    public function testPostSIDFailed()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);

        $request = Request::create('/setting/sid', 'POST', [
            'jenis' => '1',
            'sandi' => '2',
            'keterangan' => 'test_keterangan',
            'old_jenis' => 'old_jenis',
            'old_sandi' => 'old_sandi',
            'old_keterangan' => 'old_keterangan'
        ]);

        $controller = new SettingController();
        $response = $controller->postSID($request);

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals('message', session('success-add'));
    }

    public function testDeleteSIDFailed()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);
        $reffSandiSid = ReffSandiSid::factory()->create(['JENIS' => '1', 'SANDI' => '2']);

        $request = Request::create('/setting/sid/delete', 'POST', [
            'jenis' => $reffSandiSid->JENIS,
            'sandi' => $reffSandiSid->SANDI
        ]);

        $controller = new SettingController();
        $response = $controller->deleteSID($request);

        $this->assertEquals(302, $response->getStatusCode());
    }

    public function testIndexBankFailed()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);

        $response = $this->get('/setting/bank');
        $response->assertStatus(302);
    }

    public function testPostBankFailed()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);

        $request = Request::create('/setting/bank', 'POST', [
            'kode' => '1',
            'bank' => 'test_bank'
        ]);

        $controller = new SettingController();
        $response = $controller->postBank($request);

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals('message', session('success-add'));
    }

    public function testDeleteBankFailed()
    {
        $user = User::factory()->create(['level' => 2]);
        $this->actingAs($user);
        $reffBank = ReffBank::factory()->create(['KODE' => '1']);

        $request = Request::create('/setting/bank/delete', 'POST', [
            'kode' => $reffBank->KODE
        ]);

        $controller = new SettingController();
        $response = $controller->deleteBank($request);

        $this->assertEquals(302, $response->getStatusCode());
    }
}
