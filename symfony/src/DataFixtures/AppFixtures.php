<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use App\Entity\Holiday;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $this->loadUsers($manager);
        $this->loadHolidays($manager);
    }

    private function loadUsers(ObjectManager $manager)
    {
        foreach ($this->getUserData() as [$fn, $ln, $pwd, $email, $title, $roles]) {
            $user = new User();
            $user->setFirstName($fn);
            $user->setLastName($ln);
            $user->setPassword($this->passwordEncoder->encodePassword($user, $pwd));
            $user->setEmail($email);
            $user->setTitle($title);
            $user->setRoles($roles);

            $manager->persist($user);
            $this->addReference($email, $user);
        }
        $manager->flush();
    }

    private function loadHolidays(ObjectManager $manager)
    {
        foreach ($this->getHolidayData() as $index => [$eid, $sd, $ed]) {
            $holiday = new Holiday();
            $holiday->setEid($eid);
            $holiday->setStartDate($sd);
            $holiday->setEndDate($ed);

            $manager->persist($holiday);
            $this->addReference('holiday-'.$index, $holiday);
        }

        $manager->flush();
    }

    private function getUserData(): array
    {
        return [
            // $userData = [$fn, $ln, $pwd, $email, $title, $roles];
            ['Estelle',   'Lee',       'estelle_lee',   'estelle@trigone.tech',  'EMPLOYEE', ['ROLE_USER']],
            ['Thomas',    'Delang',    'thomas_delang', 'thomas@trigone.tech',   'EMPLOYEE', ['ROLE_USER']],
            ['Ahmed',     'Dattia',    'ahmed_dattia',  'ahmed@trigone.tech',    'EMPLOYEE', ['ROLE_USER']],
            ['Thierry',   'Xu',        'thierry_xu',    'thierry@trigone.tech',  'EMPLOYEE', ['ROLE_USER']],
            ['Didier',     'Mendy',    'didier_mdy',    'didier@trigone.tech',   'EMPLOYEE', ['ROLE_USER']],
            ['Alexandra', 'Da Silva',  'alex_dasilva',  'alex@trigone.tech',     'EMPLOYEE', ['ROLE_USER']],
            ['Marine',    'Castillo',  'marine_cast',   'marine@trigone.tech',   'HR',       ['ROLE_HR']],
            ['Martin',    'Roylles',   'martin_roy',    'martin@trigone.tech',   'HR',       ['ROLE_HR']],
            ['Floraine',  'Paris',     'flo_paris',     'floriane@trigone.tech', 'HR',       ['ROLE_HR']],
        ];
    }

    private function getHolidayData(): array
    {
        return [
            // $holidayData = [$eid, $startDate, $endDate, $approved=-1];
            [3, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [4, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [1, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [6, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [2, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [5, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [4, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [5, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [2, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [3, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [4, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [1, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [6, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [2, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [5, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [4, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [5, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
            [2, \DateTime::createFromFormat("Y-m-d", date('Y-m-d')), \DateTime::createFromFormat("Y-m-d", date('Y-m-d')) ],
        ];
    }
}