<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Post;
use Laravel\Passport\ClientRepository;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class PostTest extends TestCase
{

    protected $headers = [];
    protected $scopes = [];
    protected $user;
    protected $baseUrl;

    public function setUp() 
    {
        parent::setUp();
        $this->baseUrl = env('APP_URL');
        $clientRepository = new ClientRepository();
        $client = $clientRepository->createPersonalAccessClient(
            null, 'Test Personal Access Client', $this->baseUrl
        );

        \DB::table('oauth_personal_access_clients')->insert([
            'client_id' => $client->id,
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);

        $this->user = factory(User::class)->create();
        $token = $this->user->createToken('TestToken', $this->scopes)->accessToken;
        $this->headers['Accept'] = 'application/json';
        $this->headers['Authorization'] = 'Bearer '.$token;
    }

    /**
     * Test case for creating a blog post
     * 
     * @return void
     */
    public function testsPostsAreCreatedCorrectly()
    {
        $payload = [
            'title' => 'Lorem',
            'inquiry' => 'Ipsum',
        ];

        $data = $this->json('POST', '/api/v1/posts', $payload, $this->headers)
            ->assertStatus(201)
            ->assertJson(['id' => 1, 'title' => 'Lorem', 'inquiry' => 'Ipsum']);
    }

    /**
     * Test case for updating blog post
     * 
     * @return void
     */
    public function testsPostAreUpdatedCorrectly()
    {

        $data = $this->json('POST', '/api/v1/posts', ['title' => 'First Post', 'inquiry' => 'First inquiry'], $this->headers)->getContent();
        $data = json_decode($data);

        $payload = [
            'title' => 'Lorem2',
            'inquiry' => 'Ipsum2',
        ];
        
        $response = $this->json('POST', '/api/v1/posts/' . $data->id, $payload, $this->headers)
            ->assertStatus(200)
            ->assertJson([ 
                'id' => 1, 
                'title' => 'Lorem2', 
                'inquiry' => 'Ipsum2' 
            ]);
    }

    /**
     * Test case to delete a blog post
     *
     * @return void
     */
    public function testsPostAreDeletedCorrectly()
    {
        $data = $this->json('POST', '/api/v1/posts', ['title' => 'First Post', 'inquiry' => 'First inquiry'], $this->headers)->getContent();
        $data = json_decode($data);

        $this->json('DELETE', '/api/v1/posts/' . $data->id, [], $this->headers)
            ->assertStatus(204);
    }

    /**
     * Test case for blog listing
     * 
     * @return void
     */
    public function testPostAreListedCorrectly()
    {

        $data = $this->json('POST', '/api/v1/posts', ['title' => 'First Post', 'inquiry' => 'First inquiry'], $this->headers);
        $data = $this->json('POST', '/api/v1/posts', ['title' => 'Second Post', 'inquiry' => 'Second inquiry'], $this->headers);
        $data = $this->json('POST', '/api/v1/posts', ['title' => 'Third Post', 'inquiry' => 'Third inquiry'], $this->headers);
        $data = $this->json('POST', '/api/v1/posts', ['title' => 'Fourth Post', 'inquiry' => 'Fourth inquiry'], $this->headers);
        $data = $this->json('POST', '/api/v1/posts', ['title' => 'Fifth Post', 'inquiry' => 'Fifth inquiry'], $this->headers);
        $data = $this->json('POST', '/api/v1/posts', ['title' => 'Sixth Post', 'inquiry' => 'Sixth inquiry'], $this->headers);


        $response = $this->json('GET', '/api/v1/posts', [], $this->headers)
            ->assertStatus(200)
            ->assertJson([
                "current_page" => 1,
                "data" => [
                    [ 'title' => 'Sixth Post', 'inquiry' => 'Sixth inquiry' ],
                    [ 'title' => 'Fifth Post', 'inquiry' => 'Fifth inquiry' ],
                    [ 'title' => 'Fourth Post', 'inquiry' => 'Fourth inquiry' ],
                    [ 'title' => 'Third Post', 'inquiry' => 'Third inquiry' ],
                    [ 'title' => 'Second Post', 'inquiry' => 'Second inquiry' ]
                ],
                "first_page_url" => $this->baseUrl . '/api/v1/posts?page=1',
                "from" => 1,
                "last_page"=>2,
                "last_page_url" => $this->baseUrl . '/api/v1/posts?page=2',
                "next_page_url" => $this->baseUrl . '/api/v1/posts?page=2',
                "path"=>  $this->baseUrl . '/api/v1/posts',
                "per_page"=> 5,
                "prev_page_url" => null,
                "to" => 5,
                "total" => 6
            ]);
    }

    /**
     * Test case for retrieving a single blog post
     * 
     * @return void
     */
    public function testGetBlodPost() {

        $data = $this->json('POST', '/api/v1/posts', ['title' => 'First Post', 'inquiry' => 'First inquiry'], $this->headers)->getContent();
        $data = json_decode($data);

        $data = $this->json('GET', '/api/v1/posts/' . $data->id, [], $this->headers)
            ->assertStatus(200)
            ->assertJson(['id' => 1, 'title' => 'First Post', 'inquiry' => 'First inquiry']);
    }
}
