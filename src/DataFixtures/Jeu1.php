<?php

namespace App\DataFixtures;

use App\Entity\Disc;
use App\Entity\Artist;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
      
        $artist1 =new Artist();

        $artist1->setName('Queens of The stone Age');
        $artist1->setUrl("https://qotsa.com");
        
        $manager->persist($artist1);
        $disc1=new Disc();
        $disc1->setTitle("Songs for Deaf");
        $disc1->setYear(2023);
        $disc1->setPrice(2023);
        $disc1->setGenre("Rock");
        $disc1->setPicture("https://en.wikipedia.org/wiki/SOngs_for_the_Deaf#/media/File:Queens_of_the_Stone_Age_-_Songs_for_the_Deaf.png");
        $disc1->setLabel("Interscope Records");
        
        $manager->persist($disc1);
        
        $disc1->setArtistId($artist1);
        // $artist1->addDisc($disc1);

        
        $manager->flush();
    }
}
