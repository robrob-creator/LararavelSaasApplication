<?php
use App\Models\User;
use App\Models\Team;
use App\Models\ChatRoom;
use App\Models\Message;
use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team=factory(\App\Models\Team::class)->create([
            'name'=>'CodeTisans'
        ]);

        $user=factory(\App\Models\User::class)->create([
            'name'=>'Robert',
            'last_name'=>'Cumahig',
            'team_id'=>$team->id,
            'email'=>'test@example.com'
        ]);
        $user->assignRole('team_lead');

        $user=factory(\App\Models\User::class)->create([
            'name'=>'Dummy',
            'last_name'=>'Cumahig',
            'team_id'=>$team->id,
            'email'=>'rob@example.com'
        ]);
        $user->assignRole('user');

        $otherUser=factory(\App\Models\User::class)->create([
            'name'=>'konrad',
            'last_name'=>'poser',
            'team_id'=>$team->id,
            'email'=>'konrad@example.com'
        ]);

        $otherUser->assignRole('user');

        $chatroom=factory(\App\Models\ChatRoom::class)->create([
            'name'=> 'Dummy,Robert',
            'slug'=> 'Dummy,Robert',
            'type'=>true,
            'owner_id'=>1
        ]);
        $chatroom->members()->attach([1,2]);
        $chatroom->messages()->create([
            'name'=> 'Dummy',
            'content'=>'Hi Robert!',
            'sender_id'=>2,
        ]);
        $chatroom->messages()->create([
            'name'=> 'Robert',
            'content'=>'Hi there buddy! How are you doing?',
            'sender_id'=>1,
        ]);
        $chatroom=factory(\App\Models\ChatRoom::class)->create([
            'name'=>'Marketing 2020',
            'slug'=>'marketing 2020',
            'type'=>0,
            'owner_id'=>1
        ]);
        $chatroom->members()->attach([1,2]);
        $chatroom=factory(\App\Models\ChatRoom::class)->create([
            'name'=>'Huta',
            'slug'=>'huta',
            'type'=>0,
            'owner_id'=>1
        ]);
        $chatroom->members()->attach([1,2]);

        
    }
}
