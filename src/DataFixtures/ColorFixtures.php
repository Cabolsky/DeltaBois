<?php

namespace App\DataFixtures;

use App\Entity\Color;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ColorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $colors = [
            ['code' => '#8A8A14', 'name' => 'vert'],
            ['code' => '#775A42', 'name' => 'marron'],
            ['code' => '#0000FF', 'name' => 'bleu'],
            ['code' => '#ff0000', 'name' => 'rouge'],
            ['code' => '#ff00bf', 'name' => 'rose'],
        ];

        foreach ($colors as $colorData) {
            $color = new Color();
            $color->setCode($colorData['code']);
            $color->setName($colorData['name']);
            $manager->persist($color);
        }

        $manager->flush();
    }
}
