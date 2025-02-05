<?php

namespace App\Controller\Admin;

use App\Entity\Coordonnees;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use App\Controller\Admin\CoordonneesCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CoordonneesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Coordonnees::class;
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
