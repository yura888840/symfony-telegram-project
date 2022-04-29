<?php

namespace App\Controller\Admin;

use App\Entity\FlatAdvertisement;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FlatAdvertisementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return FlatAdvertisement::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
