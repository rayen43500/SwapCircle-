<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UtilisateurFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $utilisateur = new Utilisateur();
        $utilisateur->setNom('Admin');
        $utilisateur->setPrenom('User');
        $utilisateur->setEmail('admin@swapcircle.com');
        $utilisateur->setRole('ROLE_ADMIN');
        $utilisateur->setDateInscription(new \DateTime());

        $hashedPassword = $this->passwordHasher->hashPassword($utilisateur, 'admin123');
        $utilisateur->setMotDePasse($hashedPassword);

        $manager->persist($utilisateur);
        $manager->flush();
    }
}
