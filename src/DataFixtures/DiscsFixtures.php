<?php

namespace App\DataFixtures;

use App\Entity\Disc;
use App\Entity\Artist;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class DiscsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        include 'record.php';

        $artistRepo = $manager->getRepository (Artist::class);
        
        foreach($artist as $artistSeul){
        $artistDB =new Artist();
        $artistDB
        -> setId($artistSeul['id'])
        ->setName($artistSeul['name'])
        ->setUrl($artistSeul['url']);
        
        $manager->persist($artistDB);
        
        $metadata=$manager->getClassMetaData(Artist::class);
        $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetaData::GENERATOR_TYPE_NONE);
        }
        $manager->flush();
        
        foreach($disc as $unDisc){
            $discDB= new Disc();
            $discDB
            ->setTitle($unDisc['title'])
            ->setLabel($unDisc['label'])
            ->setYear($unDisc['year'])
            ->setGenre($unDisc['genre'])
            ->setPrice($unDisc['price'])
            ->setPicture($unDisc['picture']);

            $artist = $artistRepo->find($unDisc['artiste_id']);
            $discDB->setArtistId($artist);
            $manager->persist($discDB);  
        }
        $manager->flush();
        
    }
}
