<?php

namespace App;

class BoredApplication
{
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $api = new BoredAPI();
            $activityData = $api->fetchRandomActivity();

            if (isset($activityData['activity'])) {
                $activityName = $activityData['activity'];
                $activity = new Bored($activityName);
                echo "Random Activity $i: " . $activity->getName() . "\n";
            } else {
                echo 'Failed to fetch a random activity.' . "\n";
            }
        }
    }
}


