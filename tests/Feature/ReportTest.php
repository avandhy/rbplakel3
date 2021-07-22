<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ReportTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_bisa_melihat_form_report()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/report/create');

        $response->assertStatus(200);

    }

    public function test_user_bisa_mengisi_form_report()
    {
        $user = User::factory()->create();

        $data = [
                    'judul_report' => 'hoax',
                    'deskripsi_report' => 'komen ini hoax',
                    'id_report_categories' => '1',
                    'id_user' => $user->id,
                ];

        $response = $this->actingAs($user)->post('/report/store', $data );

        $response->assertStatus(200);


    }
}
