<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name'=>'John Doe'
        ]);

        Post::factory(30)->create([
            'user_id'=>$user->id
        ]);

        Post::factory(1)->create([
            'user_id' => $user->id,
            'thumbnail' => 'thumbnails/kR7QXHvEb6ilkWoTxhzVLY9s5ZuhdFyUzxukjnc5.jpg',
            'title' => 'My Key Won’t Turn Ignition Mercedes-Benz Problem',
            'slug' => 'key-wont-turn',
            'excerpt' => 'List of common problems and possible solutions Locked Steering',
            'body' => 'Wheel New drivers always experience this at least once, so we thought we would include it in this list. If the key does not turn in the ignition, try moving the steering wheel as you try to turn the key. The steering wheel will feel completely solid if you try to move it in one direction and may move slightly in the opposite direction. Push the steering wheel in the direction that allows a little movement and then insert the key and try to turn the key again. You can put pressure on the steering wheel and also try shaking the steering wheel. As you do this insert the key into the ignition and try to turn the key. DO NOT TRY TO FORCE THE KEY IN THE IGNITION. The steering column lock is a security feature which all car manufacturers incorporate in the cars. Discharged Battery Undervoltage It is possible that the battery in the car is defective, as it does not provide the necessary voltage for the ECU and the N73 Electronic Ignition/Starter Switch (EIS) to function properly. If the battery is dead or has low voltage / under voltage, the CAN communication between EIS and N72 may not function properly. The EIS in the Mercedes-Benz has a coil that induces a magnetic field on the Smartkey wich causes the key to respond to the car with a specific rolling code. Using a $10 dollar multimeter like this one, you can check that you have a good battery before you proceed further. The car battery should indicate at least 12.8 volts without the car running. When the engine is running it should be over around 14.4 volts. If you need a replacement battery for your Mercedes-Benz the most cost effective option would be to order one on Amazon. Most Mercedes-Benz cars use Battery Group 94R and a great choice would be the ACDelco 94AGM Battery which meets the OEM specifications. Click here to read reviews and check the price on Amazon. mercedes benz battery group 49amazon check price Key Tumbler Defective If you have a metal blade key instead of the Smart Key Remote, it is possible that the key tumbler could be defective. While most Mercedes-Benz cars have the SmartKey some models such as the ML Class, SLK Class, Crossfire used a metal blade key up to 2005. Some models suffer from the defective key tumbler. We have seen cars with as little as 20,000 miles where the tumbler go bad. Make sure the steering wheel is not in a locked position as mentioned above. Then insert the key into the ignition and gently jiggle the key without putting much pressure on the key as do this. As the lock pins on the tumbler wear out it will get harder and harder to turn the ignition of your car. Here is a video that will help you understand this problem. The video below shows the same problem on a GM, but the same principle applies to the older Mercedes-Benz that use a metal blade key. Defective Electronic Ignition/Switch System EIS / N73 The EIS module could also be the reason that the key does not turn when inserted in the ignition. Many car owners complain that the car starts fine on a warm or hot day but in cold days the car will not start. This may sound strange, but it is reported frequently. The EIS has processors soldered on the circuit board and in many cases the connections for the processor could be bad or the processor itself is defective. In the video below you can see how the cold temperature causes the ignition switch to not work properly. The ECU could experience the same symptoms as well. If you have this problem you will have to install a new / virgin EIS. You can not install a used unit because the EIS has to be paired / married to the car using Mercedes-Benz Star Diagnostic Software. Smart Key Remote They key itself may be the reason why the car doesn’t start. The key may open the doors, but it will not start the car. In some cases, the transponder coil wires may disconnect and need to be resoldered or the processor in the key could be defective. The simplest solution, in this case would be to order a new key from the Mercedes-Benz dealer. Read What you need to order a new key for your Mercedes-Benz. Defective Electronic Control Module (ECU) Electronic Control Module (ECU) is another reason why the car doesn’t start. You will need to get a new ECU installed to solve this problem. You can not swap with a used ECU and expect it to work as the board is “married” to the car. Another solution would be to get a used ECU and switch the processor from the old circuit board to the used replacement ECU. Watch this video and see how MBCluster user on Youtube successfully cloned a Mercedes-Benz ECU!'
        ]);
    }
}
